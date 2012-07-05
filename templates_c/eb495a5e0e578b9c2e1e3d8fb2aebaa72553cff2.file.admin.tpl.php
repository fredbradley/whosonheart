<?php /* Smarty version Smarty-3.1.8, created on 2012-07-05 21:29:21
         compiled from "/Users/fredbradley/Sites/smarty_site/whosonheart/templates/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21305325544ff5f921462ad8-78868253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb495a5e0e578b9c2e1e3d8fb2aebaa72553cff2' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/whosonheart/templates/admin.tpl',
      1 => 1341433257,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21305325544ff5f921462ad8-78868253',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'stats' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4ff5f9215db666_00478305',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff5f9215db666_00478305')) {function content_4ff5f9215db666_00478305($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  

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
				<li><a class="shortcut-button" href="#databasebackup" rel="modal"><span>
					<img src="../assets/images/build-icons/hat-and-magic-wand.png" alt="Backup Database" /><br />Backup DB</span></a></li>
				
			</ul><!-- End .shortcut-buttons-set -->
			
			<div class="clear"></div> <!-- End .clear -->
			
			
			<div class="content-box column-left">
				
				<div class="content-box-header">
					
					<h3>Useful Stats</h3>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab">
					
						<p><strong>Total Unique Guesses:</strong> <?php echo $_smarty_tpl->tpl_vars['stats']->value['numguesses'];?>
</p>
						<p><strong>User Guess Attempts:</strong> <?php echo $_smarty_tpl->tpl_vars['stats']->value['guessattempts'];?>
</p>
						<p><strong>Guess Attempts in the last hour:</strong> <?php echo $_smarty_tpl->tpl_vars['stats']->value['guessesinhour'];?>
</p>
						<p><strong>Unique User Submits:</strong> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['stats']->value['guesssubmits'])===null||$tmp==='' ? "Database Currently Too Big To Compute" : $tmp);?>
</p>
						<p><strong>Most Guessed Name:</strong> <?php echo $_smarty_tpl->tpl_vars['stats']->value['mostguessed'];?>
</p>
						<p><strong>Next Game play:</strong> <?php echo $_smarty_tpl->tpl_vars['stats']->value['nextplay'];?>
</p>
						<p><a href="#databasebackup" rel="modal"><strong>Backup Database</strong></a></p>

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