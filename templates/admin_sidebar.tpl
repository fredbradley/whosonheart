		<!-- SIDE BAR STARTS HERE -->
		<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->			
			<h1 id="sidebar-title"><a href="#">{$SITE.name}</a></h1>		  
			<!-- Logo (221px wide) -->
			<a href="#"><img id="logo" src="/assets/images/logo.png" style="width:221px;" alt="{$SITE.name} logo" /></a> 
			<!-- Sidebar Profile links -->
<!--			<div id="profile-links">
				Hello, <a href="user/profile" title="Edit your profile">{$user.first_name}</a>, you have <a href="#messages" rel="modal" title="3 Messages">3 Messages</a><br />
				<br />
				<a href="http://{$SITE.server_name}" target="_blank" title="View the Site">View the Site</a> | <a href="index.php?logout" title="Sign Out">Sign Out</a>
			</div>        -->
			
			<ul id="main-nav">  <!-- Accordion Menu -->
				
				<li>
					<a href="/admin/index.php" class="nav-top-item no-submenu {if {$page}} {else}current{/if}"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Dashboard
					</a>       
				</li>				
				<li>
					<a href="#" class="nav-top-item {if {$page}=="sites"}current{/if}">
						Guesses Manager
					</a>
					<ul>
				{if {$user.acl} gt 1}
						<li><a href="/admin/guesses/add">Add Guess</a></li>
				{/if}
						<li><a href="/admin/guesses/list">List Guesses</a></li>
					</ul>
				</li>
				<li>
					<a href="#" class="nav-top-item {if {$page}=="guessattempts"}current{/if}">
						Guess Attempts
					</a>
					<ul>
						<li><a href="/admin/searched/list">View Search Attempts</a></li>
					</ul>
				</li>
				{if {$user.acl} gt 2}
				<li>
					<a href="#" class="nav-top-item {if {$page}=="users"}current{/if}">
						User Manager
					</a>
					<ul>
						<li><a href="/admin/users/add">Add User</a></li>
						<li><a href="/admin/users/list">List Users</a></li>
					</ul>
				</li>    
				{/if}
				<li><a class="nav-top-item no-submenu" href="/admin/index.php?logout">Sign Out</a></li>  
				
			</ul> <!-- End #main-nav -->
			<div id="info" style="display:none">
			<h3>Project Info</h3>
				<p><strong>Who's On Heart online searchable database</strong> by <a href="http://www.fredbradley.me">Fred Bradley</a></p>
				<p>This project is custom developed for Heart and Global Radio. Developed by Fred Bradley under the instructions of Toby D'Olier, Senior Producer of the Who's On Heart competition.</p><p>Admin template based upon Fred Bradley's 'Quonkay' SEO Solution</p>
			</div>
			<div id="databasebackup" style="display:none;">
				<h3>Make a Database Backup</h3>
				<p>It's suggested that you do this at the end of every day. </p><p>The database that the site uses will never swap over, without specific action from Fred, however at least you're making backups so we can revert to the most recent should things hit the fan!</p>
				<form action="/admin/index.php" method="post">
				<input type="hidden" name="dbaction" value="backup" />
				<input type="hidden" name="dobackup" value="1" />
				<input class="button" type="submit" name="submit" value="Do the Backup!" />
				</form>
			</div>
			<div id="messages" style="display: none"> <!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->
				
				<h3>Mail for Help!</h3>
				<form action="/inc/functions/mailer.php" method="post">
					
					<h4>Message</h4>
				<input type="hidden" name="subject" value="Mail For Help" />
				<input type="hidden" name="fromemail" value="{$user.email}" />
				<input type="hidden" name="fromname" value="{$user.first_name} {$user.last_name}" />
					<fieldset>
						<textarea class="textarea" name="email" cols="79" rows="5"></textarea>
					</fieldset>
					
					<fieldset>
					<!--
						<select name="dropdown" class="small-input">
							<option value="option1">Send to...</option>
							<option value="option2">Everyone</option>
							<option value="option3">Admin</option>
							<option value="option4">Jane Doe</option>
						</select>
					-->	
						<input class="button" type="submit" value="Send" />
						
					</fieldset>
					
				</form>
				
			</div> <!-- End #messages -->
			
		</div></div> <!-- End #sidebar -->
