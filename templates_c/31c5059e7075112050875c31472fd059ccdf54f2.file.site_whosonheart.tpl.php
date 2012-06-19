<?php /* Smarty version Smarty-3.1.8, created on 2012-06-19 10:42:28
         compiled from "/kunden/homepages/3/d298570323/htdocs/_smarty_sites/whosonheart/templates/site_whosonheart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4771359134fc1330e746a35-35920352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31c5059e7075112050875c31472fd059ccdf54f2' => 
    array (
      0 => '/kunden/homepages/3/d298570323/htdocs/_smarty_sites/whosonheart/templates/site_whosonheart.tpl',
      1 => 1340098572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4771359134fc1330e746a35-35920352',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fc1330e815e52_43999725',
  'variables' => 
  array (
    'guessoutput' => 0,
    'guess' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fc1330e815e52_43999725')) {function content_4fc1330e815e52_43999725($_smarty_tpl) {?><html>
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