 <div class="content-box-header">

                                        <h3>Add a Guess</h3>


                                        <div class="clear"></div>

                                </div> <!-- End .content-box-header -->

                                <div class="content-box-content">

{if {$action}=='delete'}
<form action="/admin/index.php?{$smarty.server.QUERY_STRING}" method="post">
<fieldset class="column-left">
<p>Are you 100% sure you want to delete <span class="highlight">{$edit.cname|capitalize}</span> from the database?</p>
<p>There is no recovering this method, apart from adding the entire content again!</p>
</fieldset>
<fieldset class="column-right">
<fieldset class="column-left"><a href="/admin/index.php?message=Cancelled"><button class="button-cancel">Cancel</button></a>
<input type="hidden" name="id" value="{$edit.id}" />
</fieldset><fieldset class="column-right"><input type="submit" class="button-confirm" name="confirm-delete" value="Confirm" />
</fieldset></fieldset>
<div style="clear:both;"></div></form>
{else}

   <form action="/admin/index.php?{$smarty.server.QUERY_STRING}" method="post">
{if {$action}=='edit'}
<input type="hidden" name="returnmeto" value="{$smarty.server.HTTP_REFERER}" />
      {/if}                                                  <fieldset class="column-left"> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
<input type="hidden" name="id" id="id" value="{$edit.id}" />

                                                                <p>
                                                                        <label>First Name</label>
                                                                                <input class="text-input medium-input" type="text" id="firstname" value="{$edit.firstname}" name="firstname" />
                                                                </p>
                                                                <p>
                                                                        <label>Surname</label>
                                                                        <input
										class="text-input medium-input" 
										type="text" 
										id="surname" 
										name="surname" 
										value="{$edit.surname}" 
									/> 
                                                                </p>
<input type="hidden" name="cname" id="cname" value"{$edit.cname}" />
                                                                <p>
                                                                        <label>Nick Names</label>
									<textarea class="text-input textarea" id="nicknames" name="nicknames" cols="30" rows="5">{$edit.nicknames}</textarea>
                                                              <br /><small>A comma seperated list of all possible nicknames</small>  </p>
								</fieldset><fieldset class="column-right">
 <p>
                                                                        <label>Number of times guessed</label>
                                                                        <input class="text-input small-input" type="text"
                                                                                id="timesguessed" name="timesguessed" value="{$edit.timesguessed|default:1}" /><br /><small>Maximum 36 Characters</small>
                                                                </p>

</fieldset>
<fieldset class="column-right">
<!--<p><label>Time Stamp</label>-->
<input type="hidden" id="dateguessed" name="dateguessed" value="{$smarty.now}" />
<!--<br /><small>{$smarty.now|date_format}</small></p>-->

                                                                <p>
                                                                        <input class="button" type="submit" value="Submit" />
                                                                </p>

                                                        </fieldset>

                                                        <div class="clear"></div><!-- End .clear -->

                                                </form> {/if}
                                        </div> <!-- End Content Box Content -->
