		<!-- SIDE BAR STARTS HERE -->
		<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->			
			<h1 id="sidebar-title"><a href="#">{$SITE.name}</a></h1>		  
			<!-- Logo (221px wide) -->
			<a href="#"><img id="logo" src="../assets/images/logo.png" style="width:221px;" alt="{$SITE.name} logo" /></a> 
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				Hello, <a href="user/profile" title="Edit your profile">{$user.first_name}</a>, you have <a href="#messages" rel="modal" title="3 Messages">3 Messages</a><br />
				<br />
				<a href="http://{$SITE.server_name}" target="_blank" title="View the Site">View the Site</a> | <a href="index.php?logout" title="Sign Out">Sign Out</a>
			</div>        
			
			<ul id="main-nav">  <!-- Accordion Menu -->
				
				<li>
					<a href="index.php" class="nav-top-item no-submenu {if {$page}} {else}current{/if}"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Dashboard
					</a>       
				</li>				
				<li>
					<a href="#" class="nav-top-item {if {$page}=="sites"}current{/if}">
						Guesses Manager
					</a>
					<ul>
				{if {$user.acl} gt 1}
						<li><a href="index.php?page=sites&action=add">Add Guess</a></li>
				{/if}
						<li><a href="index.php?page=sites&action=list">List Guesses</a></li>
					</ul>
				</li>
				{if {$user.acl} gt 2}
				<li>
					<a href="#" class="nav-top-item {if {$page}=="users"}current{/if}">
						User Manager
					</a>
					<ul>
						<li><a href="index.php?page=users&action=add">Add User</a></li>
						<li><a href="index.php?page=users&action=list">List Users</a></li>
					</ul>
				</li>      
				{/if}
			</ul> <!-- End #main-nav -->
			<div id="info" style="display:none">
			<h3>Project Info</h3>
			</div>
			<div id="messages" style="display: none"> <!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->
				
				<h3>3 Messages</h3>
			 
				<p>
					<strong>17th May 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
			 
				<p>
					<strong>2nd May 2009</strong> by Jane Doe<br />
					Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
			 
				<p>
					<strong>25th April 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
				
				<form action="" method="post">
					
					<h4>New Message</h4>
					
					<fieldset>
						<textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
					</fieldset>
					
					<fieldset>
					
						<select name="dropdown" class="small-input">
							<option value="option1">Send to...</option>
							<option value="option2">Everyone</option>
							<option value="option3">Admin</option>
							<option value="option4">Jane Doe</option>
						</select>
						
						<input class="button" type="submit" value="Send" />
						
					</fieldset>
					
				</form>
				
			</div> <!-- End #messages -->
			
		</div></div> <!-- End #sidebar -->
