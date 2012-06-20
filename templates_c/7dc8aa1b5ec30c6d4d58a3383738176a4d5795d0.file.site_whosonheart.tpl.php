<?php /* Smarty version Smarty-3.1.8, created on 2012-06-20 12:23:34
         compiled from "/Users/fredbradley/Sites/smarty_site/whosonheart/templates/site_whosonheart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13906711944fe06b0c364fc1-50177706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7dc8aa1b5ec30c6d4d58a3383738176a4d5795d0' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/whosonheart/templates/site_whosonheart.tpl',
      1 => 1340124250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13906711944fe06b0c364fc1-50177706',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fe06b0c505422_79781660',
  'variables' => 
  array (
    'guessoutput' => 0,
    'guess' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fe06b0c505422_79781660')) {function content_4fe06b0c505422_79781660($_smarty_tpl) {?><html>
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
	<?php echo $_smarty_tpl->tpl_vars['guessoutput']->value;?>

	<form name="search" method="get" action="/xml">
		<input type="text" name="guess1" value="<?php echo $_smarty_tpl->tpl_vars['guess']->value['guess1'];?>
" /><br />
		<input type="text" name="guess2" value="<?php echo $_smarty_tpl->tpl_vars['guess']->value['guess2'];?>
" /><br />
		<input type="text" name="guess3" value="<?php echo $_smarty_tpl->tpl_vars['guess']->value['guess3'];?>
" /><br />
		<input class="button" type="submit" />
	</form>
</div>
</div>
</body>
</html>
<?php }} ?>