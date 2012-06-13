<?php /* Smarty version Smarty-3.1.8, created on 2012-06-13 11:08:13
         compiled from "/Users/fredbradley/Sites/smarty_site/whosonheart/templates/admin_notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170662444fd8668d6f9985-82943200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff2df36db7c53d17e58584d37fee4fee86dce8c4' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/whosonheart/templates/admin_notification.tpl',
      1 => 1339581144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170662444fd8668d6f9985-82943200',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'dbresult' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fd8668d705447_13380241',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fd8668d705447_13380241')) {function content_4fd8668d705447_13380241($_smarty_tpl) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>
  <div class="notification information png_bg">
                                                        <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                                                        <div> <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
                                                       </div>
                                                </div>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['dbresult']->value;?>

<?php }} ?>