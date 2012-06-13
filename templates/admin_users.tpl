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


			<h2 id="page-intro">User Management</h2>
			<div class="content-box"><!-- Start Content Box -->
				{if {$action}=="add"}
					{include file="admin_users_form.tpl"}
				{elseif {$action}=="edit"}
					{include file="admin_users_form.tpl"}
				{elseif {$action}=="delete"}
					{include file="admin_users_form.tpl"}
				{else}
					{include file="admin_users_list.tpl"}
				{/if}
				
			</div> <!-- End .content-box -->
			
			
{include file="admin_bottom.tpl"}
