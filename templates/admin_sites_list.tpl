 <div class="content-box-header">

                                        <h3>Guess List</h3>


                                        <div class="clear"></div>

                                </div> <!-- End .content-box-header -->

                                <div class="content-box-content">
<span class="meta">Sort by: <a href="/admin/guesses/list/firstname/asc">First Name</a> | <a href="/admin/guesses/list/surname/asc">Surname</a> | <a href="/admin/guesses/list/timesguessed/desc">Most Guessed</a> | <a href="/admin/guesses/list/cname/asc">Non Meta</a></span>
<div class="align-right searchbox" style="width:500px;"><form method="post" action="/admin/index.php?page=sites" name="searchbox"><input class="searchfield text-input large-input" value="Type the FULL name of the Celebrity" type="text" name="searchfield" />
<!-- <input type="submit" class="button" value="Search" /> -->
</form></div>   
 <table>

                                                        <thead>
                                                                <tr>
                                                                   <th><input class="check-all" type="checkbox" /></th>
                                                                   <th>Celebrity</th>
                                                                   <th>Times Guessed</th>
                                                                   <th>Last Updated</th>
                                                                   <th>Edit</th>
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
                                                                                        <a href="/admin/index.php?page=sites&action=list&listpage={$smarty.get.listpage -1}" title="Previous Page">&laquo; Previous</a>
<!--                                                                                        <a href="#" class="number" title="1">1</a>
                                                                                        <a href="#" class="number" title="2">2</a>
                                                                                        <a href="#" class="number current" title="3">3</a>
                                                                                        <a href="#" class="number" title="4">4</a> -->
                                                                                        <a href="/admin/index.php?page=sites&action=list&listpage={$smarty.get.listpage + 1}" title="Next Page">Next &raquo;</a>
                                                                                </div> <!-- End .pagination -->
                                                                                <div class="clear"></div>
                                                                        </td>
                                                                </tr>
                                                        </tfoot>
                                                        <tbody>
                                                {foreach $sites as $site}
                                                                <tr>
                                                                        <td><input type="checkbox" /></td>
                                                                        <td><a href="/admin/guesses/edit/{$site.id}">{$site.firstname|capitalize} {$site.surname|capitalize}</a></td>
                                                                        <td>{$site.timesguessed}</td>
									{assign var="lastupdated" value="{$site.dateguessed|substr:-10}"}
                                                                        <td>{$lastupdated|relative_date}</td>
                                                                        <td>
                                                                                <a href="/admin/guesses/edit/{$site.id}" title="Edit"><img src="/admin/resources/images/icons/pencil.png" alt="Edit" /></a>
                                                                                <a href="/admin/guesses/delete/{$site.id}" title="Delete"><img src="/admin/resources/images/icons/cross.png" alt="Delete" /></a>
                                                                        <!--    <a href="#" title="Edit Meta"><img src="/admin/resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                                                                -->     </td>

                                                                </tr>
                                                {/foreach}
                                                        </tbody>

                                                </table>

                                        </div> <!-- End Content Box Content -->
