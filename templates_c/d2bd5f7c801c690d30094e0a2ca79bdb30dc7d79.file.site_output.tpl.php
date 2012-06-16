<?php /* Smarty version Smarty-3.1.8, created on 2012-06-15 22:27:31
         compiled from "/Users/fredbradley/Sites/smarty_site/whosonheart/templates/site_output.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185597484fdba8c397c344-30914206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2bd5f7c801c690d30094e0a2ca79bdb30dc7d79' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/whosonheart/templates/site_output.tpl',
      1 => 1339795630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185597484fdba8c397c344-30914206',
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
  'unifunc' => 'content_4fdba8c39be7b2_17939734',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fdba8c39be7b2_17939734')) {function content_4fdba8c39be7b2_17939734($_smarty_tpl) {?><html>
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

<form name="search" method="post" action="v2.php">
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