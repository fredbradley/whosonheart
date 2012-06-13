<?php /* Smarty version Smarty-3.1.8, created on 2012-04-16 18:47:17
         compiled from "/Users/fredbradley/Sites/smarty_site/simplysofas/templates/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:992865934f6b4c617fe640-03415112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed74317be5ed2316c7f6815da8ac42a870a4fdc3' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/simplysofas/templates/admin.tpl',
      1 => 1334598435,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '992865934f6b4c617fe640-03415112',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f6b4c6182b9f3_79037322',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f6b4c6182b9f3_79037322')) {function content_4f6b4c6182b9f3_79037322($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  

	<body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
<?php echo $_smarty_tpl->getSubTemplate ("admin_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
		<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>
<?php echo $_smarty_tpl->getSubTemplate ("admin_notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			
			<!-- Page Head -->
			<h2>Welcome <?php echo $_smarty_tpl->tpl_vars['user']->value['first_name'];?>
</h2>
			<p id="page-intro">What would you like to do?</p>
			
			<ul class="shortcut-buttons-set"> <!-- Replace the icons URL's with your own -->
				
				<li><a class="shortcut-button" href="index.php?page=sites&action=add"><span>
					<img src="../assets/images/build-icons/add.png" alt="icon" /><br />
					Add A New Site
				</span></a></li>
				
				<li><a class="shortcut-button" href="index.php?page=sites"><span>
					<img src="../assets/images/build-icons/pencil.png" alt="icon" /><br />
					Edit A Site
				</span></a></li>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['user']->value['acl'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1>1){?>
				<li><a class="shortcut-button" href="index.php?page=users"><span>
					<img src="../assets/images/build-icons/id.png" alt="icon" /><br />
					View Users
				</span></a></li>
				<?php }?>
				<li><a class="shortcut-button" href="#info" rel="modal"><span>
					<img src="../assets/images/build-icons/info.png" alt="icon" /></br />Project Info</span></a></li>
				<li><a class="shortcut-button" href="http://www.fredbradley.co.uk/contact"><span><img src="../assets/images/build-icons/mail.png" alt="icon" /><br />Mail For Help</span></a></li>

				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['user']->value['acl'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2==9){?>
				<li><a class="shortcut-button" href="#messages" rel="modal"><span>
					<img src="resources/images/icons/path-to-icon.png" alt="icon" /><br />
					Open Modal
				</span></a></li>
				<?php }?>
				
			</ul><!-- End .shortcut-buttons-set -->
			
			<div class="clear"></div> <!-- End .clear -->
			
			
			<div class="content-box column-left">
				
				<div class="content-box-header">
					
					<h3>Content box left</h3>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab">
					
						<h4>Maecenas dignissim</h4>
						<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus. Maecenas dignissim enim quis ipsum mattis aliquet. Maecenas id velit et elit gravida bibendum. Duis nec rutrum lorem. Donec egestas metus a risus euismod ultricies. Maecenas lacinia orci at neque commodo commodo.
						</p>
						
					</div> <!-- End #tab3 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			<div class="content-box column-right closed-box">
				
				<div class="content-box-header"> <!-- Add the class "closed" to the Content box header to have it closed by default -->
					
					<h3>Content box right</h3>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab">
					
						<h4>This box is closed by default</h4>
						<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus. Maecenas dignissim enim quis ipsum mattis aliquet. Maecenas id velit et elit gravida bibendum. Duis nec rutrum lorem. Donec egestas metus a risus euismod ultricies. Maecenas lacinia orci at neque commodo commodo.
						</p>
						
					</div> <!-- End #tab3 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			<div class="clear"></div>
			
			
			
<?php echo $_smarty_tpl->getSubTemplate ("admin_bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>