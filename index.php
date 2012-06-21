<?php
/***************************************
** (c) Fred Bradley                   **
** http://www.fredbradley.me          **
****************************************
** Site using Smarty                  **
** Fred Bradley +44 (0) 7867 953 849  **
** fred@fredbradley.co.uk             **
***************************************/

	/* Page Setup */
		session_start();

	/* LOAD CONFIG (each file) */
		require_once 'inc/config/siteconfigs.php';

	/* LOAD VARIABLES */
		$debugformat = array('nositefound' => "Sorry, theres not site configured for your URL");
		$debug = $db->error($debugformat['nositefound']);
	$guessoutput = array();
if ($_POST) {
	foreach ($_POST as $guess) {
		if ($guess == "") {
			break;
		} 
		$correctguess = $db->correctGuesses($guess);
		if ($correctguess != 0) {
			$output = "<p>".ucwords($guess)." is the person saying \"".$correctguess[5]."\" and was guessed by <a href=\"".$correctguess[4]."\" target=\"_blank\">".$correctguess[2]." who won &pound".$correctguess[6]."</a></p>";
			$guessoutput[] = $output;
			break;
		}
		if (ucwords($guess) == "Tina Turner") {
//			$output = "<p>Tina Turner is the person saying \"Who's\" and was guessed by <a href=\"http://www.heart.co.uk/win/whos-on-heart/\" target=\"_blank\">Katie who won &pound;5000</a>";
			$guessoutput[] = $output;
			break;
		}

		echo "Guess: ".$guess."<br />";
		$xml = simplexml_load_file("http://v1-who.fredb.me/index.php?xml&search=".$guess);
		if ($xml->error) {
			$output = "<p>It doesn't look like \"".ucwords($guess)."\" has been guess yet, have you spelt the name correctly? If so you should call when we play again ". playagain(time())."!</p>";
		} else {
			$output = "<p>I found \"".ucwords($xml->guess->name->full_name)."\" who has been guessed ".pluralise($xml->guess->timesguess)."!</p>";
		}	//	var_dump($xml);

	$guessoutput[] = $output;
	}
//	var_dump($guessoutput);
//	var_dump($_POST);
}
	/* LOAD FUNCTIONS */
		require_once($SITE_PATH."inc/functions/common.php");
	//	$query = $db->getGuesses("SELECT * FROM ".DB_PREFIX."guesses");
		$array = $db->searchGuesses($_GET['search'], $_GET['field']);

		if (isset($_GET['xml'])) {
			header ("Content-Type:text/xml");
			$student_info = $array;

			// creating object of SimpleXMLElement
			$xml_student_info = new SimpleXMLElement("<?xml version=\"1.0\"?><guesses></guesses>");

			// function call to convert array to xml
			array_to_xml($array,$xml_student_info);

			//saving generated xml file
			//$xml_student_info->asXML('file path and name');
			print $xml_student_info->asXML();
		/*	$xml = new ArrayToXML();
			$output = $xml->toXML($array, 'guesses');
			echo ($output);*/
		} else {
//			var_dump($array);
		}

	/* SMARTY ASSIGNS */
		$smarty->assign('guesses', $guessoutput);
		$smarty->assign('guess', $_POST);
		$smarty->assign('SITE', $site);
		$smarty->assign('TITLE', $site['title']);
		$smarty->assign('error', $debug);
		$smarty->assign('FACEPAGE', $fanpage);

	/* DISPLAY PAGE */
	if (isset($_GET['xml'])) {
		$smarty->display('site_xml.tpl');
	} else {
		$smarty->display('site_whosonheart.tpl');
	}


function array_to_xml($student_info, &$xml_student_info) {
    foreach($student_info as $key => $value) {
        if(is_array($value)) {
            if(!is_numeric($key)){
                $subnode = $xml_student_info->addChild("$key");
                array_to_xml($value, $subnode);
            }
            else{
                array_to_xml($value, $xml_student_info);
            }
        }
        else {
            $xml_student_info->addChild("$key","$value");
        }
    }
}

function pluralise($int) {
	if ($int > 1) {
		return $int ." times";
	} elseif ($int == 1) {
		return "once";
	} elseif ($int < 1) {
		return $int ." times";
	}
}
function playagain($time) {
	return $time;
}
?>
