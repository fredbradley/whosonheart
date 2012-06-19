<?php /* Smarty version Smarty-3.1.8, created on 2012-06-19 13:05:32
         compiled from "/Users/fredbradley/Sites/smarty_site/whosonheart/templates/site_whosonheart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13906711944fe06b0c364fc1-50177706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7dc8aa1b5ec30c6d4d58a3383738176a4d5795d0' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/whosonheart/templates/site_whosonheart.tpl',
      1 => 1339872516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13906711944fe06b0c364fc1-50177706',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'guessoutput' => 0,
    'guess' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fe06b0c505422_79781660',
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
</style>
</head>
<body>
<?php echo $_smarty_tpl->tpl_vars['guessoutput']->value;?>

<form name="search" method="get" action="v2.php">
<input type="text" name="guess1" value="<?php echo $_smarty_tpl->tpl_vars['guess']->value['guess1'];?>
" /><br />
<input type="text" name="guess2" value="<?php echo $_smarty_tpl->tpl_vars['guess']->value['guess2'];?>
" /><br />
<input type="text" name="guess3" value="<?php echo $_smarty_tpl->tpl_vars['guess']->value['guess3'];?>
" /><br />
<input class="button" type="submit" />
</form>
</body>
</html>
<?php }} ?>