 <div class="content-box-header">

                                        <h3>What Users have Searched Online</h3>


                                        <div class="clear"></div>

                                </div> <!-- End .content-box-header -->

                                <div class="content-box-content">
<!-- <span class="meta">Sort by: <a href="/admin/guesses/list/firstname/asc">First Name</a> | <a href="/admin/guesses/list/surname/asc">Surname</a> | <a href="/admin/guesses/list/timesguessed/desc">Most Guessed</a> | <a href="/admin/guesses/list/cname/asc">Non Meta</a></span> -->
<div class="align-right searchbox" style="width:500px;"><form method="post" action="/admin/index.php?page=guessattempts" name="searchbox"><input class="searchfield text-input large-input" value="Search..." type="text" name="searchfield" />
<!-- <input type="submit" class="button" value="Search" /> -->
</form></div>   
 <table>

                                                        <thead>
                                                                <tr>
                                                                   <th>Hash</th>
                                                                   <th>Guess</th>
                                                                   <th>Return</th>
                                                                   <th>Last Updated</th>
                                                                </tr>

                                                        </thead>

                                                        <tfoot>
                                                                <tr>
                                                                        <td colspan="6">
                                                                        <!--    <div class="bulk-actions align-left">
                                                                                        <select name="dropdown">
                                                                                                <option value="option1">Choose an action...</option>
                                                                                                <option value="option2">Edit</option>
                                                                                                <option value="option3">Delete</option>
                                                                                        </select>
                                                                                        <a class="button" href="#">Apply to selected</a>
                                                                                </div> -->

                                                                                <div class="pagination">
	{if {$smarty.get.listpage > 1}}
                                                                                        <a href="/admin/searched/list/{$smarty.get.listpage - 1}" title="Previous Page">&laquo; Previous</a>{/if}
{*{$foo=1}{while $foo < {{$stats.guessattempts/10}+1}}
											<a href="/admin/searched/list/{$foo}" class="number{if {$foo}=={$smarty.get.listpage}} current{/if}" title="{$foo}">{$foo}</a>
<!-- {$foo++} -->{/while}*}
         {if $smarty.get.listpage < {$stats.guessattempts/10}}                                                                               <a href="/admin/searched/list/{$smarty.get.listpage + 1}" title="Next Page">Next &raquo;</a>
                                                              {/if}                  </div> <!-- End .pagination -->
                                                                                <div class="clear"></div>
                                                                        </td>
                                                                </tr>
                                                        </tfoot>
                                                        <tbody>
                                                {foreach $atts as $site}
                                                                <tr>
                                                                        <td>{$site.hash}</td>
                                                                        <td>{$site.guess|capitalize}</td>
                                                                        <td>{$site.return}</td>
									{assign var="lastupdated" value="{$site.time|substr:-10}"}
                                                                        <td>{$lastupdated|relative_date}</td>
                                                                </tr>
                                                {/foreach}
                                                        </tbody>

                                                </table>

                                        </div> <!-- End Content Box Content -->
