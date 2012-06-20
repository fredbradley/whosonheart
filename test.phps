<?php 

/* VARIABLES
==============*/
$server 	= "who.fredb.me";
$thispage 	= "test.php";

?>
<html>
	<head>
		<style>
			body {
				width:500px;
				margin:auto;
			}
			form#whosonheart {
				clear:both;
			}
			form#whosonheart input.text {
				font-size:20px;
				padding:10px;
			}
		</style>
	</head>

<body class="london">
<?php
if ($_POST) {
	$query_string = "guess1=" . urlencode($_POST['guess1']) . "&guess2=" . urlencode($_POST['guess2']) ."&guess3=".urlencode($_POST['guess3']);
	$xmlfile = "http://".$server."/xml?".$query_string;
	$xml = simplexml_load_file($xmlfile);
	if (isset($_GET['debug'])) {
		echo "<pre>";
		var_dump($xml);
		echo "</pre>";
	}
} else {
	$xml = "";
}
?>

<form name="whosonheart" class="custom_form" id="whosonheart" action="<?php echo $thispage; ?>" method="post">
	<input class="text input" name="guess1" value="<?php echo $xml->guesses->guess[0]->searched; ?>" /><br />
<?php if ($_POST['guess1'])
	echo $xml->guesses->guess[0]->output;
?>	<input class="text input" name="guess2" value="<?php echo $xml->guesses->guess[1]->searched; ?>" /><br />
<?php if ($_POST['guess2'])
	echo $xml->guesses->guess[1]->output;
?>	<input class="text input" name="guess3" value="<?php echo $xml->guesses->guess[2]->searched; ?>" /><br />
<?php if ($_POST['guess3'])
	echo $xml->guesses->guess[2]->output;
?>	<input class="button" type="submit" />
</form>
</body>
</html>

