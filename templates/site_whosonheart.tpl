<html>
<head>
<style>
input[type="text"] {
	width:400px;
	font-size:30px;
	font-weight:bold;
	padding:10px;
	margin:10px;
}
input.button {
	font-size:30px;
	padding:10px;
	margin:10px;
	font-weight:bold;
}
</style>
</head>
<body>
{$guessoutput}
<form name="search" method="get" action="v2.php">
<input type="text" name="guess1" value="{$guess.guess1}" /><br />
<input type="text" name="guess2" value="{$guess.guess2}" /><br />
<input type="text" name="guess3" value="{$guess.guess3}" /><br />
<input class="button" type="submit" />
</form>
</body>
</html>
