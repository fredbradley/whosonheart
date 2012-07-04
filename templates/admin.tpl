{include file="admin_head.tpl"}  

	<body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
{include file="admin_sidebar.tpl"}
		
		<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>
{include file="admin_notification.tpl"}
			
			<!-- Page Head -->
			<h2>Welcome {$user.first_name}</h2>
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
				{if {$user.acl} gt 1}
				<li><a class="shortcut-button" href="users/list"><span>
					<img src="../assets/images/build-icons/id.png" alt="icon" /><br />
					View Users
				</span></a></li>
				{/if}
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
					
						<p><strong>Total Unique Guesses:</strong> {$stats.numguesses}</p>
						<p><strong>User Guess Attempts:</strong> {$stats.guessattempts}</p>
						<p><strong>Guess Attempts in the last hour:</strong> {$stats.guessesinhour}</p>
						<p><strong>Unique User Submits:</strong> {$stats.guesssubmits|default:"Database Currently Too Big To Compute"}</p>
						<p><strong>Most Guessed Name:</strong> {$stats.mostguessed}</p>
						<p><strong>Next Game play:</strong> {$stats.nextplay}</p>
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
					{include file="admin_config.tpl"}
					</div> <!-- End #tab3 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			<div class="clear"></div>
			
			
			
{include file="admin_bottom.tpl"}
