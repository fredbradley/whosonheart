<?php /* Smarty version Smarty-3.1.8, created on 2012-04-16 11:59:40
         compiled from "/Users/fredbradley/Sites/smarty_site/simplysofas/templates/admin_notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20131778954f881c6d1d0412-67994600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8aca11a5f84afc444c3902edad5b65606c393e4' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/simplysofas/templates/admin_notification.tpl',
      1 => 1334573780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20131778954f881c6d1d0412-67994600',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f881c6d23bd26_73809247',
  'variables' => 
  array (
    'message' => 0,
    'dbresult' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f881c6d23bd26_73809247')) {function content_4f881c6d23bd26_73809247($_smarty_tpl) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>
  <div class="notification information png_bg">
                                                        <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                                                        <div> <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
                                                       </div>
                                                </div>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['dbresult']->value;?>

<?php }} ?>