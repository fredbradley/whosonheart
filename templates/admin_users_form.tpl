 <div class="content-box-header">

                                        <h3>{if {$action}=='edit'}Edit User{elseif {$action}=='delete'}Delete User &quot;{$edit.username}&quot;{else}Add User{/if}</h3>


                                        <div class="clear"></div>

                                </div> <!-- End .content-box-header -->

                                <div class="content-box-content">
{$dbresult|default: ''}
{if {$action}=='delete'}
<form action="index.php?{$smarty.server.QUERY_STRING}" method="post">
<fieldset class="column-left">
<p>Are you 100% sure you want to delete <span class="highlight">{$edit.first_name} {$edit.last_name}'s</span> access to this site?</p>
<p>If you do change your mind, later on, you can always add a user like normal!</p>
</fieldset>
<fieldset class="column-right">
<fieldset class="column-left"><a href="index.php?message=Cancelled"><button class="button-cancel">Cancel</button></a>
<input type="hidden" name="id" value="{$edit.id}" />
</fieldset><fieldset class="column-right"><input type="submit" class="button-confirm" name="confirm-delete" value="Confirm" />
</fieldset></fieldset>
<div style="clear:both;"></div></form>
{else}
   <form action="index.php?{$smarty.server.QUERY_STRING}" method="post">

                                                        <fieldset class="column-left"> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->

                                                                <p>
                                                                        <label>First Name</label>
                                                                                <input value="{$edit.first_name}" class="text-input small-input" type="text" id="first_name" name="first_name" />
<!-- <span class="input-notification success png_bg">Successful message</span> --> <!-- Classes for input-notification: success, error, information, attention -->
                                                                                <br /><small>D'ya really need a description for this?</small>
                                                                </p>

                                                                <p>
                                                                        <label>Last Name</label>
                                                                        <input value="{$edit.last_name}" class="text-input small-input" type="text" id="last_name" name="last_name" /> 
<!-- <span class="input-notification error png_bg">Error message</span>-->
                                                                </p>

                                                                <p>
                                                                        <label>Email Address</label>
                                                                        <input value="{$edit.email}" class="text-input medium-input" type="text" id="email" name="email" />
                                                                </p>
							</fieldset>
							<fieldset class="column-right">
								<p> <label>Username</label>
									<input value="{$edit.username}" class="text-input small-input" type="text" id="username" name="username" />
								</p>
							{if {$action}=='edit'}
								<p><label>Password</label>
									<input style="background:#ff0000;color:#ffffff;" class="text-input small-input" type="text" readonly id="nonedit" name="nonedit" value="Sorry, you can't change your password" />
									<br /><small>Feature coming soon</small>
								</p>
							{else}
								<p><label>Password</label>
									<input class="text-input small-input" type="password" id="passwd" name="passwd" />
								</p>
							{/if}
                                                                <p>
                                                                        <label>Access Control</label>
                                                                        <select name="acl" class="small-input" id="acl">
										<option value="{$edit.acl}">--- SELECT ---</option>
                                                                                <option value="0">Locked Out</option>
                                                                                <option value="1">Edit & Delete Sites Only</option>
                                                                                <option value="2">Full Sites Management</option>
                                                                                <option value="3">Full Admin (Users & Site)</option>
                                                                        </select>
                                                                </p>

								<input type="hidden" name="submittype" value="{$type|default: 'error'}" />
                                                                <p>
                                                                        <input class="button" type="Submit" value="Submit" />
                                                                </p>

                                                        </fieldset>

                                                        <div class="clear"></div><!-- End .clear -->

                                                </form>
{/if}
                                        </div> <!-- End Content Box Content -->
