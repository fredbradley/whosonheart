<?php /* Smarty version Smarty-3.1.8, created on 2012-06-19 10:42:03
         compiled from "/kunden/homepages/3/d298570323/htdocs/_smarty_sites/dev_whosonheart/templates/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11790329074fdf910b69a791-54632331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd81046af329d6e17cf182bcd76e69a6345dc643a' => 
    array (
      0 => '/kunden/homepages/3/d298570323/htdocs/_smarty_sites/dev_whosonheart/templates/admin.tpl',
      1 => 1340095321,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11790329074fdf910b69a791-54632331',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fdf910b8b6607_87398251',
  'variables' => 
  array (
    'user' => 0,
    'stats' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fdf910b8b6607_87398251')) {function content_4fdf910b8b6607_87398251($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  

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
				
				<li><a class="shortcut-button" href="guesses/add"><span>
					<img src="../assets/images/build-icons/add.png" alt="icon" /><br />
					Add A Guess
				</span></a></li>
				
				<li><a class="shortcut-button" href="guesses/list"><span>
					<img src="../assets/images/build-icons/pencil.png" alt="icon" /><br />
					Edit A Guess
				</span></a></li>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['user']->value['acl'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1>1){?>
				<li><a class="shortcut-button" href="users/list"><span>
					<img src="../assets/images/build-icons/id.png" alt="icon" /><br />
					View Users
				</span></a></li>
				<?php }?>
				<li><a class="shortcut-button" href="#info" rel="modal"><span>
					<img src="../assets/images/build-icons/info.png" alt="icon" /></br />Project Info</span></a></li>
				<li><a class="shortcut-button" href="#messages" rel="modal"><span>
					<img src="../assets/images/build-icons/mail.png" alt="icon" /><br />
					Mail For Help
				</span></a></li>
				
			</ul><!-- End .shortcut-buttons-set -->
			
			<div class="clear"></div> <!-- End .clear -->
			
			
			<div class="content-box column-left">
				
				<div class="content-box-header">
					
					<h3>Useful Stats</h3>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab">
					
					<!--	<h4>Maecenas dignissim</h4>
					-->	<p><strong>Total Unique Guesses:</strong> <?php echo $_smarty_tpl->tpl_vars['stats']->value['numguesses'];?>
</p>
						<p><strong>Most Guessed Name:</strong> <?php echo $_smarty_tpl->tpl_vars['stats']->value['mostguessed'];?>
</p>
						<p><strong>Next Game play:</strong> <?php echo $_smarty_tpl->tpl_vars['stats']->value['nextplay'];?>
</p>
						
					</div> <!-- End #tab3 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			<div class="content-box column-right">
				
				<div class="content-box-header"> <!-- Add the class "closed" to the Content box header to have it closed by default -->
					
					<h3>Correct Answers</h3>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab">
					<?php echo $_smarty_tpl->getSubTemplate ("admin_config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					</div> <!-- End #tab3 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			<div class="clear"></div>
			
			
			
<?php echo $_smarty_tpl->getSubTemplate ("admin_bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>