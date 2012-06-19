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
body {
	margin:0px;
}
div#container {
	margin:auto;
	width:1010px;
	background:url('http://heartfm.gcstatic.com//d/heart.co.uk/img/bg-body__79b71cfc.gif');
}
div#header img {
	width:1000px;
	margin:auto;
	margin:5px;
}
div#output {
	margin:auto;
}
</style>
</head>
<body>
<div id="container">
<div id="header">
<img src="http://assets.gcstatic.com/u/apps/asset_manager/uploaded/2012/24/whos-on-heart-june-2-1339358753.jpeg"/>
</div>
<div id="output">
	{$guessoutput}
	<form name="search" method="get" action="/xml">
		<input type="text" name="guess1" value="{$guess.guess1}" /><br />
		<input type="text" name="guess2" value="{$guess.guess2}" /><br />
		<input type="text" name="guess3" value="{$guess.guess3}" /><br />
		<input class="button" type="submit" />
	</form>
</div>
</div>
</body>
</html>
