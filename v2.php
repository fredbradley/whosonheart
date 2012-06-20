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

	$guessoutput = array();
	if ($_GET) {
		$addAnalytics = $db->guessMade();
		foreach ($_GET as $guess) {
			if ($guess == "") {
				break;
			}
			$iguess = $db->searchGuesses(strtolower($guess));
			if (ucwords($guess) == "Tina Turner") {
				$output = "<p>Tina Turner is the person saying \"Who's\" and was guessed by <a href=\"http://www.heart.co.uk/win/whos-on-heart/\" target=\"_blank\">Katie who won &pound;5000</a></p>";
				$guessoutput[] = $output;
			} elseif (strtolower($guess) == "fergie") {
				$output = "<p>Both Fergie from the Black Eyed Peas and Sir Alex Ferguson have already been guessed. If you meant another \"Fergie\" please type their full name. </p>";
				$guessoutput[] = $output;
			} else {
				if ($iguess['guess']['error'] OR $iguess['error']) {
					$output = "<p>It doesn't look like \"".ucwords($guess)."\" has been guess yet, have you spelt the name correctly? If so you should call when we play again ". $db->nextPlay()."!</p>";
				} else {
					// PUT IN GOOGLE API CODE HERE
					$output = "<p>I found \"".trim(ucwords($iguess[0]['guess']['name']['full_name']))."\" who has been guessed ".pluralise($iguess[0]['guess']['timesguess'])."!</p>";
				}
				$guessoutput[] = $output;
			}
		}
	}

	/* LOAD FUNCTIONS */
		require_once($SITE_PATH."inc/functions/common.php");
	//	$query = $db->getGuesses("SELECT * FROM ".DB_PREFIX."guesses");
	//	$array = $db->searchGuesses($_GET['search'], $_GET['field']);

$nextplay = $db->nextPlay();
	/* SMARTY ASSIGNS */
		$smarty->assign('nextplay', $nextplay);
		$smarty->assign('guesses', $guessoutput);
		$smarty->assign('guess', $_GET);
//		$smarty->assign('SITE', $site);
//		$smarty->assign('TITLE', $site['title']);
//		$smarty->assign('error', $debug);
//		$smarty->assign('FACEPAGE', $fanpage);

	/* DISPLAY PAGE */
	if (isset($_GET['xml'])) {
		$smarty->display('site_xml.tpl');
	} else {
		$smarty->display('site_output.tpl');
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
?>
