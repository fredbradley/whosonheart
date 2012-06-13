<?php /* Smarty version Smarty-3.1.8, created on 2012-06-13 11:07:56
         compiled from "/Users/fredbradley/Sites/smarty_site/whosonheart/templates/site_whosonheart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8120149594fd8667c9f8c90-73985481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7dc8aa1b5ec30c6d4d58a3383738176a4d5795d0' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/whosonheart/templates/site_whosonheart.tpl',
      1 => 1339581144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8120149594fd8667c9f8c90-73985481',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fd8667ca20556_62949376',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fd8667ca20556_62949376')) {function content_4fd8667ca20556_62949376($_smarty_tpl) {?><html>
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
<form name="search" method="post" action="index.php">
<input type="text" name="guess1" /><br />
<input type="text" name="guess2" /><br />
<input type="text" name="guess3" /><br />
<input class="button" type="submit" />
</form>
</body>
</html>
<?php }} ?>