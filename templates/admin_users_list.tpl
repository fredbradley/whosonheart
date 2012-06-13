 <div class="content-box-header">

                                        <h3>Users Table</h3>


                                        <div class="clear"></div>

                                </div> <!-- End .content-box-header -->

                                <div class="content-box-content">

                                                <table>

                                                        <thead>
                                                                <tr>
                                                                   <th><input class="check-all" type="checkbox" /></th>
                                                                   <th>Name</th>
                                                                   <th>Email</th>
                                                                   <th>Admin Level</th>
                                                                   <th>Last Login</th>
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
                                                                                </div>

                                                                                <div class="pagination">
                                                                                        <a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
                                                                                        <a href="#" class="number" title="1">1</a>
                                                                                        <a href="#" class="number" title="2">2</a>
                                                                                        <a href="#" class="number current" title="3">3</a>
                                                                                        <a href="#" class="number" title="4">4</a>
                                                                                        <a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
                                                                                </div> --> <!-- End .pagination -->
                                                                                <div class="clear"></div>
                                                                        </td>
                                                                </tr>
                                                        </tfoot>
                                                        <tbody>
                                                {foreach $users as $user}
                                                                <tr>
                                                                        <td><input type="checkbox" /></td>
                                                                        <td><a href="index.php?page=users&action=edit&id={$user.id}">{$user.first_name} {$user.last_name}</a></td>
                                                                        <td>{$user.email}</td>
                                                                        <td>{$user.acl}</td>
                                                                        <td>{$user.last_login|relative_date}</td>
                                                                        <td>
                                                                                <a href="index.php?page=users&action=edit&id={$user.id}" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                                                                                <a href="index.php?page=users&action=delete&id={$user.id}" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a>
                                                                        <!--    <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                                                                -->     </td>

                                                                </tr>
                                                {/foreach}
                                                        </tbody>

                                                </table>

                                        </div> <!-- End Content Box Content -->
