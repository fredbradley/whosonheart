<?php /* Smarty version Smarty-3.1.8, created on 2012-06-19 11:25:23
         compiled from "/kunden/homepages/3/d298570323/htdocs/_smarty_sites/dev_whosonheart/templates/admin_sites_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16339475034fdf947d879a94-66394319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1032cec7d592b0a01779d74085af819246839415' => 
    array (
      0 => '/kunden/homepages/3/d298570323/htdocs/_smarty_sites/dev_whosonheart/templates/admin_sites_list.tpl',
      1 => 1340097915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16339475034fdf947d879a94-66394319',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fdf947d901a83_90240493',
  'variables' => 
  array (
    'sites' => 0,
    'site' => 0,
    'lastupdated' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fdf947d901a83_90240493')) {function content_4fdf947d901a83_90240493($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/homepages/3/d298570323/htdocs/_smarty_sites/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_relative_date')) include '/homepages/3/d298570323/htdocs/_smarty_sites/libs/plugins/modifier.relative_date.php';
?> <div class="content-box-header">

                                        <h3>Guess List</h3>


                                        <div class="clear"></div>

                                </div> <!-- End .content-box-header -->

                                <div class="content-box-content">
<span class="meta">Sort by: <a href="/admin/guesses/list/surname/asc">Surname</a> | <a href="/admin/guesses/list/timesguessed/desc">Most Guessed</a> | <a href="/admin/guesses/list/cname/asc">Non Meta</a></span>
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
                                                                                        <a href="/admin/index.php?page=sites&action=list&listpage=<?php echo $_GET['listpage']-1;?>
" title="Previous Page">&laquo; Previous</a>
<!--                                                                                        <a href="#" class="number" title="1">1</a>
                                                                                        <a href="#" class="number" title="2">2</a>
                                                                                        <a href="#" class="number current" title="3">3</a>
                                                                                        <a href="#" class="number" title="4">4</a> -->
                                                                                        <a href="/admin/index.php?page=sites&action=list&listpage=<?php echo $_GET['listpage']+1;?>
" title="Next Page">Next &raquo;</a>
                                                                                </div> <!-- End .pagination -->
                                                                                <div class="clear"></div>
                                                                        </td>
                                                                </tr>
                                                        </tfoot>
                                                        <tbody>
                                                <?php  $_smarty_tpl->tpl_vars['site'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['site']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sites']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['site']->key => $_smarty_tpl->tpl_vars['site']->value){
$_smarty_tpl->tpl_vars['site']->_loop = true;
?>
                                                                <tr>
                                                                        <td><input type="checkbox" /></td>
                                                                        <td><a href="/admin/guesses/edit/<?php echo $_smarty_tpl->tpl_vars['site']->value['id'];?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['site']->value['firstname']);?>
 <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['site']->value['surname']);?>
</a></td>
                                                                        <td><?php echo $_smarty_tpl->tpl_vars['site']->value['timesguessed'];?>
</td>
									<?php ob_start();?><?php echo substr($_smarty_tpl->tpl_vars['site']->value['dateguessed'],-10);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["lastupdated"] = new Smarty_variable($_tmp1, null, 0);?>
                                                                        <td><?php echo smarty_modifier_relative_date($_smarty_tpl->tpl_vars['lastupdated']->value);?>
</td>
                                                                        <td>
                                                                                <a href="/admin/guesses/edit/<?php echo $_smarty_tpl->tpl_vars['site']->value['id'];?>
" title="Edit"><img src="/admin/resources/images/icons/pencil.png" alt="Edit" /></a>
                                                                                <a href="/admin/guesses/delete/<?php echo $_smarty_tpl->tpl_vars['site']->value['id'];?>
" title="Delete"><img src="/admin/resources/images/icons/cross.png" alt="Delete" /></a>
                                                                        <!--    <a href="#" title="Edit Meta"><img src="/admin/resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                                                                -->     </td>

                                                                </tr>
                                                <?php } ?>
                                                        </tbody>

                                                </table>

                                        </div> <!-- End Content Box Content -->
<?php }} ?>