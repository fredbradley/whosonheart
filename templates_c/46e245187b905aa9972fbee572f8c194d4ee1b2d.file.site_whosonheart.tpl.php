<?php /* Smarty version Smarty-3.1.8, created on 2012-06-18 21:49:53
         compiled from "/kunden/homepages/3/d298570323/htdocs/_smarty_sites/dev_whosonheart/templates/site_whosonheart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2516660184fdf947100b851-78155421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46e245187b905aa9972fbee572f8c194d4ee1b2d' => 
    array (
      0 => '/kunden/homepages/3/d298570323/htdocs/_smarty_sites/dev_whosonheart/templates/site_whosonheart.tpl',
      1 => 1340051354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2516660184fdf947100b851-78155421',
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
  'unifunc' => 'content_4fdf947106c312_98790301',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fdf947106c312_98790301')) {function content_4fdf947106c312_98790301($_smarty_tpl) {?><html>
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