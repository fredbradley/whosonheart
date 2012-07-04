<?php /* Smarty version Smarty-3.1.8, created on 2012-07-04 20:49:05
         compiled from "/Users/fredbradley/Sites/smarty_site/whosonheart/templates/admin_searched_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:558344634ff34806234ac4-37729413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b827f1e0ea2e9ba153ca5d8047c5db0b1eea0824' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/whosonheart/templates/admin_searched_list.tpl',
      1 => 1341398426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '558344634ff34806234ac4-37729413',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4ff3480625bfd9_59324029',
  'variables' => 
  array (
    'stats' => 0,
    'atts' => 0,
    'site' => 0,
    'lastupdated' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff3480625bfd9_59324029')) {function content_4ff3480625bfd9_59324029($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/Users/fredbradley/Sites/smarty_site/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_relative_date')) include '/Users/fredbradley/Sites/smarty_site/libs/plugins/modifier.relative_date.php';
?> <div class="content-box-header">

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
	<?php ob_start();?><?php echo $_GET['listpage']>1;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>
                                                                                        <a href="/admin/searched/list/<?php echo $_GET['listpage']-1;?>
" title="Previous Page">&laquo; Previous</a><?php }?>

         <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['stats']->value['guessattempts']/10;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_GET['listpage']<$_tmp2){?>                                                                               <a href="/admin/searched/list/<?php echo $_GET['listpage']+1;?>
" title="Next Page">Next &raquo;</a>
                                                              <?php }?>                  </div> <!-- End .pagination -->
                                                                                <div class="clear"></div>
                                                                        </td>
                                                                </tr>
                                                        </tfoot>
                                                        <tbody>
                                                <?php  $_smarty_tpl->tpl_vars['site'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['site']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['atts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['site']->key => $_smarty_tpl->tpl_vars['site']->value){
$_smarty_tpl->tpl_vars['site']->_loop = true;
?>
                                                                <tr>
                                                                        <td><?php echo $_smarty_tpl->tpl_vars['site']->value['hash'];?>
</td>
                                                                        <td><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['site']->value['guess']);?>
</td>
                                                                        <td><?php echo $_smarty_tpl->tpl_vars['site']->value['return'];?>
</td>
									<?php ob_start();?><?php echo substr($_smarty_tpl->tpl_vars['site']->value['time'],-10);?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["lastupdated"] = new Smarty_variable($_tmp3, null, 0);?>
                                                                        <td><?php echo smarty_modifier_relative_date($_smarty_tpl->tpl_vars['lastupdated']->value);?>
</td>
                                                                </tr>
                                                <?php } ?>
                                                        </tbody>

                                                </table>

                                        </div> <!-- End Content Box Content -->
<?php }} ?>