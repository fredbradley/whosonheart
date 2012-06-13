<?php /* Smarty version Smarty-3.1.8, created on 2012-03-22 15:17:33
         compiled from "/Users/fredbradley/Sites/smarty_site/simplysofas/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18876974254f69fc6342e2a3-28924766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '080c5cf106afbb9f058cc4ebf822d7a0c40af0c2' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/simplysofas/templates/index.tpl',
      1 => 1332429443,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18876974254f69fc6342e2a3-28924766',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f69fc6346f3c9_22090374',
  'variables' => 
  array (
    'TITLE' => 0,
    'SITE' => 0,
    'FACEPAGE' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f69fc6346f3c9_22090374')) {function content_4f69fc6346f3c9_22090374($_smarty_tpl) {?><!DOCTYPE html>
<html id="home" lang="en">
<head prefix="og: http://ogp.me/ns#">
	<title> <?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 </title>
	<meta http-equiv="Content-Type" 	content="text/html; charset=utf-8" />
	<meta name="keywords" 			content="<?php echo $_smarty_tpl->tpl_vars['SITE']->value['meta'];?>
"/>
	<meta name="description" 		content="<?php echo $_smarty_tpl->tpl_vars['FACEPAGE']->value['company_overview'];?>
<?php echo $_smarty_tpl->tpl_vars['SITE']->value['description'];?>
" />
	<meta property="fb:app_id" 		content="262274060507774" />
	<meta property="og:type"		content="website" />
	<meta property="og:url" 		content="http://<?php echo $_smarty_tpl->tpl_vars['SITE']->value['server_name'];?>
" />
	<meta property="og:title" 		content="<?php echo $_smarty_tpl->tpl_vars['SITE']->value['name'];?>
" />
	<meta property="og:image" 		content="http://<?php echo $_smarty_tpl->tpl_vars['SITE']->value['server_name'];?>
/assets/img/logo.png" />
	<meta property="og:image:type" 		content="image/png">
	<meta property="og:image:width" 	content="300">
	<meta property="og:image:height" 	content="300">
	<meta property="og:description" 	content="<?php echo $_smarty_tpl->tpl_vars['SITE']->value['description'];?>
" />
	<meta property="og:video" 		content="<?php echo $_smarty_tpl->tpl_vars['SITE']->value['video'];?>
" />
</head>
<body>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['SITE']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>
	<table>
		<tr>
			<td>ID</td>
			<td><?php echo $_smarty_tpl->tpl_vars['SITE']->value['id'];?>
</td>
		</tr>
		<tr>
			<td>Site Address</td>
			<td>http://<?php echo $_smarty_tpl->tpl_vars['SITE']->value['server_name'];?>
</td>
		</tr>
		<tr>
			<td>Site Skin</td>
			<td><?php echo $_smarty_tpl->tpl_vars['SITE']->value['template'];?>
</td>
		</tr>
		<tr>
			<td>Site Name</td>
			<td><?php echo $_smarty_tpl->tpl_vars['SITE']->value['name'];?>
</td>
		</tr>
		<tr>
			<td>Meta Keywords</td>
			<td><?php echo $_smarty_tpl->tpl_vars['SITE']->value['meta'];?>
</td>
		</tr>
		<tr>
			<td>Meta Description</td>
			<td><?php echo $_smarty_tpl->tpl_vars['SITE']->value['description'];?>
</td>
		</tr>
		<tr>
			<td>Site Title</td>
			<td><?php echo $_smarty_tpl->tpl_vars['SITE']->value['title'];?>
</td>
		</tr>
		<tr>
			<td>Site Subheading</td>
			<td><?php echo $_smarty_tpl->tpl_vars['SITE']->value['subhead'];?>
</td>
		</tr>
		<tr>
			<td>Video</td>
			<td><?php echo $_smarty_tpl->tpl_vars['SITE']->value['video'];?>
</td>
		</tr>
		<tr>
			<td>Text</td>
			<td><?php echo $_smarty_tpl->tpl_vars['SITE']->value['text'];?>
</td>
		</tr>
		<tr>
			<td>Analytics Code</td>
			<td><?php echo $_smarty_tpl->tpl_vars['SITE']->value['analytics'];?>
</td>
		</tr>
	</table>
<?php }else{ ?>
<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }?>

</body>
</html>
<?php }} ?>