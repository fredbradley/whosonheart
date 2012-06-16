<?php
/*
 * FROM: http://www.mygeekpal.com/simple-database-class-for-php/
 */

class Database {

var $connection;
var $database;
var $rows = array();
var $count;
var $result;

/* Create a database connection */
function connect ($dbuser,$dbpass,$dbhost,$dbname) {
  $this->connection = mysql_connect($dbhost,$dbuser,$dbpass);
  $this->database = mysql_select_db($dbname);
}

/* Query a MySQL Database */
function query ($query) {
  $this->result = mysql_query($query) or die(mysql_error());
  return $this->result;
}

function error($message) {
	$output = "<div class=\"notification error png_bg\">";
	$output .= "<a href=\"#\" class=\"close\">";
	$output .= "<img src=\"resources/images/icons/cross_grey_small.png\" title=\"Close\" alt=\"close\" /></a>";
	$output .= "<div>Error: ".$message;
		if (mysql_error() != "") {
			$output .= " <b><em>".mysql_error()."</em></b>";
		}
	$output .= "</div></div>";
	return $output;
}
function showError($error) {
	$query = "SELECT * FROM ".DB_PREFIX."errors WHERE errorcode = '$error'";
	$errors = mysql_fetch_assoc($this->result);
	$output = $this->error($errors[$error]);
	return $output;
                }


/************************************************************************************
** USER FUNCTIONS
*************************************************************************************/
function addUser($username, $first_name, $last_name, $email, $passwd, $acl) {
	$passwd = md5($passwd);
	$query = "INSERT INTO ".DB_PREFIX."users ";
	$query .= "(username, first_name, last_name, email, passwd, acl) VALUES ";
	$query .= "('".$username."', '".$first_name."', '".$last_name."', '".$email."', '".$passwd."', '".$acl."')";
	$result = mysql_query($query);
	return $result;
}

function updateUser($id) {
	$firstname = $_POST['first_name'];
	$lastname = $_POST['last_name'];
	$username = $_POST['username'];
	$acl = $_POST['acl'];
	$email = $_POST['email'];

	$query = "UPDATE ".DB_PREFIX."users SET ";
	$query .= "first_name='$firstname', last_name='$lastname',";
	$query .= " email='".$email."', username='$username', acl=".$acl;
	$query .= " WHERE id=".$id;
	$result = mysql_query($query);
	return $result;
}

function editUser($id) {
	$query = "SELECT * FROM ".DB_PREFIX."users WHERE id=".$id;
	$this->result = mysql_query($query);
	while($r = mysql_fetch_assoc($this->result)) {
		$this->row[] = $r;
	}
	mysql_free_result($this->result);
	$output = $this->row[0];
return $output;
}

function deleteUser($id) {
	$query = "DELETE FROM ".DB_PREFIX."users WHERE id=".$id;
	$output = mysql_query($query);
	$output = header("Location: index.php?page=users&message=DeleteConfirmed");
	die();
return $output;
}
/************************************************************************************
** SITE EDITING FUNCTIONS
*************************************************************************************/
function addGuess() {
	$firstname = strtolower($_POST['firstname']);
	$surname = strtolower($_POST['surname']);
	$cname = $firstname." ".$surname;
	$nicknames = strtolower($_POST['nicknames']);
	$timesguessed = $_POST['timesguessed'];
	$dateguessed = $_POST['dateguessed'];

	$query = "INSERT INTO ".DB_PREFIX."guesses (firstname, surname, cname, nicknames, timesguessed, dateguessed) VALUES ('$firstname', '$surname', '$cname', '$nicknames', '$timesguessed', '$dateguessed')";
	$result = mysql_query($query);
return $result;
}

function updateGuess($id) {
	$getdates = "SELECT dateguessed FROM ".DB_PREFIX."guesses WHERE id=".$id;
	$getdate = mysql_query($getdates);
	$date = mysql_result($getdate,0);
	$firstname = strtolower($_POST['firstname']);
	$surname = strtolower($_POST['surname']);
	$cname = $firstname." ".$surname;
	$nicknames = strtolower($_POST['nicknames']);
	$timesguessed = $_POST['timesguessed'];
	$dateguessed = $date.",".$_POST['dateguessed'];
	$values = "firstname='$firstname', surname='$surname', cname='$cname', nicknames='$nicknames', timesguessed='$timesguessed', dateguessed='$dateguessed'";
	$update = "UPDATE ".DB_PREFIX."guesses SET ".$values." WHERE id=".$id;
	$result = mysql_query($update);
return $result;
}
function editSite($id) {
        $query = "SELECT * FROM ".DB_PREFIX."guesses WHERE id=".$id;
        $this->result = mysql_query($query);
        while($r = mysql_fetch_assoc($this->result)) {
                $this->row[] = $r;
        }
        mysql_free_result($this->result);
        $output = $this->row[0];
return $output;
}
function deleteSite($id) {
	$query = "DELETE FROM ".DB_PREFIX."guesses WHERE id=".$id;
	$output = mysql_query($query);
	$output .= header("Location: index.php?page=guesses&message=DeleteConfirmed");
return $output;
}

function valCache($configtable) {
	$query = "SELECT `allowCache` FROM ".$configtable;	
	$this->result = mysql_query($query) or die(mysql_error());
	while($r = mysql_fetch_assoc($this->result)) {
		$this->row[] = $r;
	}
	mysql_free_result($this->result);
	return $this->row[0]['allowCache'];
}

/* Query a MySQL Dabase
Returns Both arrays Assoc & Indexed */
function getrows ($query) {
  $this->result = mysql_query($query);
  while($r = mysql_fetch_array($this->result,MYSQL_BOTH))
    $this->rows[] = $r;

    mysql_free_result($this->result);
    return $this->rows;
}
function searchGuesses($search="", $field="cname") {
	$query = "SELECT * FROM ".DB_PREFIX."guesses";
	if ($search)
		$where = " WHERE cname = '".$search."'";
//."' OR surname='".$search."' OR firstname='".$search."' OR nicknames LIKE '%".$search."%'";
	$array = $this->getGuesses($query.$where,0);
	if ($array['error']) {
		$where = " WHERE nicknames LIKE '%".$search."%'";
		$array = $this->getGuesses($query.$where, 0);
		if (!empty($array[0]['guess']['nicknames'])) {
			if (in_array($search, $array[0]['guess']['nicknames'])) {
				var_dump($array[0]['guess']['nicknames']);
				return $array;
			} else {
	                        var_dump($array[0]['guess']['nicknames']);
				$input = explode(" ", $search);
	var_dump($input);
				if (!$input[1]) 
					$output['solution'] = "It doesn't look like you put it two names";
					$output['error'] = "We could not find what you searched for";
				return $output;
//array("error" => "We could not find anything that matched your search term");
			}
		} else {
			return array("error" => "Nothing could be found that matched \"".$search."\", sorry!");
		}
	}
//	echo $query.$where;
return $array;
}
function getGuesses($query, $named=1) {
	$result = mysql_query($query." ORDER BY timesguessed DESC");
	while($row = mysql_fetch_assoc($result)) {
		$nickhanes = array();
		if (substr($row['nicknames'], -1) === ',')
			$row['nicknames'] = rtrim($row['nicknames'], ",");
		$nicknamess = explode(", ",$row['nicknames']);
		$i=0;
		foreach ($nicknamess as $nickname) {
			$nicknames['nn_'.$i] = $nickname;
			$i++;
		}

		$dates		= array();
		$datesguessed	= explode(",",$row['dateguessed']);
		$i=0;
		foreach ($datesguessed as $date) {
			$dates['date_'.$i] = $date;
			$i++;
		}
		$name['firstname'] = $row['firstname'];
		$name['surname'] = $row['surname'];
		$name['full_name'] = $row['cname'];
		$loop['name'] = $name;
		$loop['nicknames'] 		= $nicknames;
		$loop['timesguess']		= $row['timesguessed'];
		$loop['datesguessed']		= $dates;

//		$output[] = $loop;
		if ($named)
		$output[$row['cname']] = $loop;
		else 
		$output[]['guess'] = $loop;
	}
	if (!$output)
		$output['error'] = "No Match Found";
//	mysql_free_result($result);
return $output;
}
function UgetMenu($parent) {
	$query = "SELECT * FROM ".DB_PREFIX."menu WHERE menu='$parent' AND published=1";
	$this->result = mysql_query($query);
	while($row = mysql_fetch_assoc($this->result)) {
		$output[] = $row;
	}
	return $output;
}
function getUsers() {
	$query = "SELECT * FROM ".DB_PREFIX."users";
	$this->result = mysql_query($query);
	while($row = mysql_fetch_assoc($this->result)) {
		$output[] = $row;
	}
	return $output;
}
function getSites($sort="surname", $order="ASC") {
	$query = "SELECT * FROM ".DB_PREFIX."guesses";
	if (isset($_GET['sort']))
	$query = $query ." ORDER BY ".$sort." ".$order."";
	$this->result = mysql_query($query);
	while($row = mysql_fetch_assoc($this->result)) {
			$output[] = $row;
	}
	return $output;
}
function getMenu($parent) {
        $query = "SELECT * FROM ".DB_PREFIX."menu WHERE menu='$parent' AND published=1";
        $this->result = mysql_query($query);
        while($r = mysql_fetch_assoc($this->result)) {
                $this->rows[] = $r;
        }
        $array = $this->rows;
}


/* Count Number of rows query */
function count ($query) {
  $this->result = mysql_query($query);
  $this->count = mysql_num_rows($this->result);
  return $this->count;
}

/* Create a Safe Query */
function escapedata($data) {
    return mysql_real_escape_string($data);
}

/* Close connection */
function __destruct(){ @mysql_close($this->connection); }


}
?>
