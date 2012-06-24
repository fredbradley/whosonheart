<?php /* Smarty version Smarty-3.1.8, created on 2012-06-24 19:37:46
         compiled from "/kunden/homepages/3/d298570323/htdocs/_smarty_sites/whosonheart/templates/site_studio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13447377134fe1e78ddfaf20-71715069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0af1dbf37f9bc572f370bca0cc853c00741ff0f0' => 
    array (
      0 => '/kunden/homepages/3/d298570323/htdocs/_smarty_sites/whosonheart/templates/site_studio.tpl',
      1 => 1340563062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13447377134fe1e78ddfaf20-71715069',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fe1e78de7a5c5_18695620',
  'variables' => 
  array (
    'guessoutput' => 0,
    'guess' => 0,
    'timesguessed' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fe1e78de7a5c5_18695620')) {function content_4fe1e78de7a5c5_18695620($_smarty_tpl) {?><html>
<head>
<style>
input[type="text"], form span {
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
<!--<div id="header">
<img src="http://assets.gcstatic.com/u/apps/asset_manager/uploaded/2012/24/whos-on-heart-june-2-1339358753.jpeg"/>
</div>-->
<div id="output">
	<?php echo $_smarty_tpl->tpl_vars['guessoutput']->value[0];?>

	<form name="search" method="post" action="studio.php">
		<input type="text" name="guess1" value="<?php echo $_smarty_tpl->tpl_vars['guess']->value['guess1'];?>
" /><span><?php echo $_smarty_tpl->tpl_vars['timesguessed']->value[0];?>
</span><br />
		<input type="text" name="guess2" value="<?php echo $_smarty_tpl->tpl_vars['guess']->value['guess2'];?>
" /><span><?php echo $_smarty_tpl->tpl_vars['timesguessed']->value[1];?>
</span><br />
		<input type="text" name="guess3" value="<?php echo $_smarty_tpl->tpl_vars['guess']->value['guess3'];?>
" /><span><?php echo $_smarty_tpl->tpl_vars['timesguessed']->value[2];?>
</span><br />
		<input class="button" type="submit" />
	</form>
</div>
</div>
</body>
</html>
<?php }} ?>