<?php
if ($_GET['listpage'] == "")
	$_GET['listpage'] = 1;
//else
//	$l = $_GET['listpage'];
	$guessatts = $db->getGuessAttempts($_GET['listpage']);

?>
