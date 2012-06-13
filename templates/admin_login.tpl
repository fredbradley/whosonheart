{include file="admin_head.tpl"}
	<body id="login">
		<div id="login-wrapper" class="png_bg">
			<div id="login-top">
				<h1>{$SITE.name}</h1>
				<!-- Logo (221px width) -->
				<img id="logo" src="../assets/images/logo.png" alt="{$SITE.name} logo" />
			</div> <!-- End #logn-top -->
			<div id="login-content">
				<form action="index.php" method="POST">
					{if {$msg}} 
						{$msg}
					{/if}
					{if {$error}}
					<div class="notification error png_bg">
						<div>
							{$error}
						</div>
					</div>
					{/if}
					
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

