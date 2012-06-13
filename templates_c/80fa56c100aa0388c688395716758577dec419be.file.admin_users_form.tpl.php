<?php /* Smarty version Smarty-3.1.8, created on 2012-04-16 19:54:50
         compiled from "/Users/fredbradley/Sites/smarty_site/simplysofas/templates/admin_users_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7641886104f86f3379cb193-33660388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80fa56c100aa0388c688395716758577dec419be' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/simplysofas/templates/admin_users_form.tpl',
      1 => 1334602488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7641886104f86f3379cb193-33660388',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f86f3379cea59_59850709',
  'variables' => 
  array (
    'action' => 0,
    'edit' => 0,
    'dbresult' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f86f3379cea59_59850709')) {function content_4f86f3379cea59_59850709($_smarty_tpl) {?> <div class="content-box-header">

                                        <h3><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=='edit'){?>Edit User<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2=='delete'){?>Delete User &quot;<?php echo $_smarty_tpl->tpl_vars['edit']->value['username'];?>
&quot;<?php }else{ ?>Add User<?php }}?></h3>


                                        <div class="clear"></div>

                                </div> <!-- End .content-box-header -->

                                <div class="content-box-content">
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dbresult']->value)===null||$tmp==='' ? '' : $tmp);?>

<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3=='delete'){?>
<form action="index.php?<?php echo $_SERVER['QUERY_STRING'];?>
" method="post">
<fieldset class="column-left">
<p>Are you 100% sure you want to delete <span class="highlight"><?php echo $_smarty_tpl->tpl_vars['edit']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['edit']->value['last_name'];?>
's</span> access to this site?</p>
<p>If you do change your mind, later on, you can always add a user like normal!</p>
</fieldset>
<fieldset class="column-right">
<fieldset class="column-left"><a href="index.php?message=Cancelled"><button class="button-cancel">Cancel</button></a>
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['id'];?>
" />
</fieldset><fieldset class="column-right"><input type="submit" class="button-confirm" name="confirm-delete" value="Confirm" />
</fieldset></fieldset>
<div style="clear:both;"></div></form>
<?php }else{ ?>
   <form action="index.php?<?php echo $_SERVER['QUERY_STRING'];?>
" method="post">

                                                        <fieldset class="column-left"> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->

                                                                <p>
                                                                        <label>First Name</label>
                                                                                <input value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['first_name'];?>
" class="text-input small-input" type="text" id="first_name" name="first_name" />
<!-- <span class="input-notification success png_bg">Successful message</span> --> <!-- Classes for input-notification: success, error, information, attention -->
                                                                                <br /><small>D'ya really need a description for this?</small>
                                                                </p>

                                                                <p>
                                                                        <label>Last Name</label>
                                                                        <input value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['last_name'];?>
" class="text-input small-input" type="text" id="last_name" name="last_name" /> 
<!-- <span class="input-notification error png_bg">Error message</span>-->
                                                                </p>

                                                                <p>
                                                                        <label>Email Address</label>
                                                                        <input value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['email'];?>
" class="text-input medium-input" type="text" id="email" name="email" />
                                                                </p>
							</fieldset>
							<fieldset class="column-right">
								<p> <label>Username</label>
									<input value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['username'];?>
" class="text-input small-input" type="text" id="username" name="username" />
								</p>
							<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4=='edit'){?>
								<p><label>Password</label>
									<input style="background:#ff0000;color:#ffffff;" class="text-input small-input" type="text" readonly id="nonedit" name="nonedit" value="Sorry, you can't change your password" />
									<br /><small>Feature coming soon</small>
								</p>
							<?php }else{ ?>
								<p><label>Password</label>
									<input class="text-input small-input" type="password" id="passwd" name="passwd" />
								</p>
							<?php }?>
                                                                <p>
                                                                        <label>Access Control</label>
                                                                        <select name="acl" class="small-input" id="acl">
										<option value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['acl'];?>
">--- SELECT ---</option>
                                                                                <option value="0">Locked Out</option>
                                                                                <option value="1">Edit & Delete Sites Only</option>
                                                                                <option value="2">Full Sites Management</option>
                                                                                <option value="3">Full Admin (Users & Site)</option>
                                                                        </select>
                                                                </p>

								<input type="hidden" name="submittype" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['type']->value)===null||$tmp==='' ? 'error' : $tmp);?>
" />
                                                                <p>
                                                                        <input class="button" type="Submit" value="Submit" />
                                                                </p>

                                                        </fieldset>

                                                        <div class="clear"></div><!-- End .clear -->

                                                </form>
<?php }?>
                                        </div> <!-- End Content Box Content -->
<?php }} ?>