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

//var_dump($db->searchGuesses($_GET['guess1']));

	$guessoutput = array();
	if ($_POST) {
		foreach ($_POST as $guess) {
			if ($guess == "") {
				break;
			}
			$iguess = $db->searchGuesses(strtolower($guess));
                        $correctguess = $db->correctGuesses($guess);
			if ($correctguess != 0) {
				$output = "<p>".ucwords($correctguess[1])." is the person saying \"".$correctguess[5]."\" and was guessed by <a href=\"".$correctguess[4]."\" target=\"_blank\">".$correctguess[2].", who won &pound;".$correctguess[6]."</a></p>";
                                $return = ucwords($correctguess[1]);
                                $guessoutput[] = $output;
				$times = "<spann class=\"Correct\">Correct</span>";
				$timesguessed[] = $times;

	/*		if (ucwords($guess) == "Tina Turner") {
				$output = "<p>Tina Turner is the person saying \"Who's\" and was guessed by <a href=\"http://www.heart.co.uk/win/whos-on-heart/\" target=\"_blank\">Katie who won &pound;5000</a></p>";
				$guessoutput[] = $output;
				$times = "<span class=\"correct\">Correct</span>";
				$timesguessed[] = $times; */
			} elseif (strtolower($guess) == "fergie") {
				$output = "<p>Both Fergie from the Black Eyed Peas and Sir Alex Ferguson have already been guessed. If you meant another \"Fergie\" please type their full name. </p>";
				$guessoutput[] = $output;

			} else {
				if ($iguess['guess']['error'] OR $iguess['error']) {
					$output = "<p>It doesn't look like \"".ucwords($guess)."\" has been guess yet, have you spelt the name correctly? If so you should call when we play again ". $db->nextPlay()."!</p>";
					$times = "<span class=\"new\">NEW</span>";
				} else {
					// PUT IN GOOGLE API CODE HERE
					$output = "".trim(ucwords($iguess[0]['guess']['name']['full_name']))." has been guessed ".pluralise($iguess[0]['guess']['timesguess'])."!</p>";
					$times = $iguess[0]['guess']['timesguess'];
				}
				$guessoutput[] = $output;
				$timesguessed[] = $times;
			}
		}
	}

	/* LOAD FUNCTIONS */
		require_once($SITE_PATH."inc/functions/common.php");

$nextplay = $db->nextPlay();
	/* SMARTY ASSIGNS */
		$smarty->assign('nextplay', $nextplay);
		$smarty->assign('guesses', $guessoutput);
		$smarty->assign('return', $returns);
		$smarty->assign('guess', $_POST);
		$smarty->assign('timesguessed', $timesguessed);

	/* DISPLAY PAGE */
	if (isset($_GET['xml'])) {
		$smarty->display('site_xml.tpl');
	} else {
		$smarty->display('site_studio.tpl');
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
