<?php

//if ($_POST) {
	$xml = simplexml_load_file("http://whosonheart.fb?guess1=".$_POST['guess1']."&guess2=".$_POST['guess2']."&guess3=".$_POST['guess3']);
	print_r($xml);	
//}
?>
<form action="test.php" method="post">
<input name="guess1" value="<?php echo $_POST['guess1']; ?>" />
<input name="guess2" value="<?php echo $_POST['guess2']; ?>" />
<input name="guess3" value="<?php echo $_POST['guess3']; ?>" />
<input type="submit" />
</form>

