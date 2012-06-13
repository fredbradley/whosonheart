<?php /* Smarty version Smarty-3.1.8, created on 2012-04-18 09:41:11
         compiled from "/kunden/homepages/3/d298570323/htdocs/_smarty_sites/quonkay/templates/admin_notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11274505734f8e70176500c0-94824977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c847e2a11c8a4b477966e1a985490b565f4c3660' => 
    array (
      0 => '/kunden/homepages/3/d298570323/htdocs/_smarty_sites/quonkay/templates/admin_notification.tpl',
      1 => 1334733271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11274505734f8e70176500c0-94824977',
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
  'unifunc' => 'content_4f8e7017663f28_72959680',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f8e7017663f28_72959680')) {function content_4f8e7017663f28_72959680($_smarty_tpl) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>
  <div class="notification information png_bg">
                                                        <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                                                        <div> <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
                                                       </div>
                                                </div>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['dbresult']->value;?>

<?php }} ?>