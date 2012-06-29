<?php /* Smarty version Smarty-3.1.8, created on 2012-06-29 10:19:54
         compiled from "/Users/fredbradley/Sites/smarty_site/whosonheart/templates/admin_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8653368394fed733a816958-05285933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1792b132c8ec379d243b6074d3ec1605fb240cf8' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/whosonheart/templates/admin_login.tpl',
      1 => 1340095054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8653368394fed733a816958-05285933',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SITE' => 0,
    'msg' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fed733a919fb7_42543134',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fed733a919fb7_42543134')) {function content_4fed733a919fb7_42543134($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<body id="login">
		<div id="login-wrapper" class="png_bg">
			<div id="login-top">
				<h1><?php echo $_smarty_tpl->tpl_vars['SITE']->value['name'];?>
</h1>
				<!-- Logo (221px width) -->
				<img id="logo" src="/assets/images/logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['SITE']->value['name'];?>
 logo" />
			</div> <!-- End #logn-top -->
			<div id="login-content">
				<form action="/admin/index.php" method="POST">
					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?> 
						<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

					<?php }?>
					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?>
					<div class="notification error png_bg">
						<div>
							<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

						</div>
					</div>
					<?php }?>
					
					<p>
						<label>Username</label>
						<input class="text-input" name="username" type="text" />
					</p>
					<div class="clear"></div>
					<p>
						<label>Password</label>
						<input class="text-input" type="password" name="password" />
					</p>
			<!-- COMMENTED OUT THE REMEMBER ME CHECKBOX AS THIS SCRIPT IS NOT USING COOKIES -->
<!--			 		<div class="clear"></div>
					<p id="remember-password">
						<input type="checkbox" />Remember me
					</p> -->
					<div class="clear"></div>
					<p>
						<input class="button" type="submit" value="Sign In" />
					</p>
				</form>
			</div> <!-- End #login-content -->
			
		</div> <!-- End #login-wrapper -->	
  </body>  
</html>

<?php }} ?>