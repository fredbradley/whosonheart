<?php
        /* DO THE LOG IN STUFF */
		if (!$_SESSION) {
			if ($_POST) {
				$username = mysql_real_escape_string($_POST['username']);
				$password = md5($_POST['password']);
                
				$result = $db->query("SELECT * FROM ".USERS_TABLE." WHERE username = '$username' AND passwd = '$password'");

				if(mysql_num_rows($result)) {
				// Login
					$_SESSION['user']['username'] = htmlspecialchars($username); // htmlspecialchars() sanitises XSS
					$db->query("UPDATE ".USERS_TABLE." SET last_ip='".$_SERVER['REMOTE_ADDR']."', last_login=".time()." WHERE username='$username'");
				// Set Session
					$user = mysql_fetch_assoc($result);
				//	$_SESSION['user']['id'] = $user['id'];
				//	$_SESSION['user']['email'] = $user['email'];
				//	$_SESSION['user']['first_name'] = $user['first_name'];
				//	$_SESSION['user']['fullname'] = $user['first_name']." ".$user['last_name'];
				//	$_SESSION['user']['ip'] = $user['last_ip'];
				//	$_SESSION['begin'] = $user['last_login'];
					$_SESSION['user'] = $user;						
		if ($_SESSION['user']['acl']==0) {
			header("Location:index.php?logout&locked");
		}
				
				} else {
				// Invalid username/password
					$smarty->assign('msg', getMsg("error", "Invalid Username/Password combination"));
		                }
			}
		}

	/* DO THE LOG OUT STUFF */
		if ($_GET['message'] == 'loggedout') {
			if (isset($_GET['locked'])) {
				$smarty->assign('msg', getMsg("attention", "Erm, ".$_GET['user'].", there's no easy way of telling you this! Your account has been locked. Please contact an administrator"));
			} else {
				$smarty->assign('msg', getMsg("attention", "You have been logged out"));
			}
		}
?>
