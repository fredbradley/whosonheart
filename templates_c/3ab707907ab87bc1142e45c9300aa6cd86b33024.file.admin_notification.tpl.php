<?php /* Smarty version Smarty-3.1.8, created on 2012-06-19 11:39:08
         compiled from "/kunden/homepages/3/d298570323/htdocs/_smarty_sites/whosonheart/templates/admin_notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17295351914fc0d6250c5248-28242790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ab707907ab87bc1142e45c9300aa6cd86b33024' => 
    array (
      0 => '/kunden/homepages/3/d298570323/htdocs/_smarty_sites/whosonheart/templates/admin_notification.tpl',
      1 => 1340098572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17295351914fc0d6250c5248-28242790',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fc0d6250dca46_10229499',
  'variables' => 
  array (
    'message' => 0,
    'dbresult' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fc0d6250dca46_10229499')) {function content_4fc0d6250dca46_10229499($_smarty_tpl) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>
  <div class="notification information png_bg">
                                                        <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                                                        <div> <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
                                                       </div>
                                                </div>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['dbresult']->value;?>

<?php }} ?>