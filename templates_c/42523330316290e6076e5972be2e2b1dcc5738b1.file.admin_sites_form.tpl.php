<?php /* Smarty version Smarty-3.1.8, created on 2012-06-13 11:08:22
         compiled from "/Users/fredbradley/Sites/smarty_site/whosonheart/templates/admin_sites_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14305894624fd86696c964e6-79637578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42523330316290e6076e5972be2e2b1dcc5738b1' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/whosonheart/templates/admin_sites_form.tpl',
      1 => 1339581144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14305894624fd86696c964e6-79637578',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'edit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fd86696e02113_39460542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fd86696e02113_39460542')) {function content_4fd86696e02113_39460542($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/Users/fredbradley/Sites/smarty_site/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) include '/Users/fredbradley/Sites/smarty_site/libs/plugins/modifier.date_format.php';
?> <div class="content-box-header">

                                        <h3>Add a Guess</h3>


                                        <div class="clear"></div>

                                </div> <!-- End .content-box-header -->

                                <div class="content-box-content">

<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=='delete'){?>
<form action="index.php?<?php echo $_SERVER['QUERY_STRING'];?>
" method="post">
<fieldset class="column-left">
<p>Are you 100% sure you want to delete <span class="highlight"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['edit']->value['cname']);?>
</span> from the database?</p>
<p>There is no recovering this method, apart from adding the entire content again!</p>
</fieldset>
<fieldset class="column-right">
<fieldset class="column-left"><a href="index.php?message=Cancelled"><button class="button-cancel">Cancel</button></a>
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['id'];?>
" />
</fieldset><fieldset class="column-right"><input type="submit" class="button-confirm" name="confirm-delete" value="Confirm" />
</fieldset></fieldset>
<div style="clear:both;"></div></form>
<?php }else{ ?>

   <form action="index.php?<?php echo $_SERVER['QUERY_STRING'];?>
" method="post">

                                                        <fieldset class="column-left"> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
<input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['id'];?>
" />

                                                                <p>
                                                                        <label>First Name</label>
                                                                                <input class="text-input medium-input" type="text" id="firstname" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['firstname'];?>
" name="firstname" />
                                                                </p>
                                                                <p>
                                                                        <label>Surname</label>
                                                                        <input
										class="text-input medium-input" 
										type="text" 
										id="surname" 
										name="surname" 
										value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['surname'];?>
" 
									/> 
                                                                </p>
<input type="hidden" name="cname" id="cname" value"<?php echo $_smarty_tpl->tpl_vars['edit']->value['cname'];?>
" />
                                                                <p>
                                                                        <label>Nick Names</label>
									<textarea class="text-input textarea" id="nicknames" name="nicknames" cols="30" rows="5"><?php echo $_smarty_tpl->tpl_vars['edit']->value['nicknames'];?>
</textarea>
                                                              <br /><small>A comma seperated list of all possible nicknames</small>  </p>
								</fieldset><fieldset class="column-right">
 <p>
                                                                        <label>Number of times guessed</label>
                                                                        <input class="text-input small-input" type="text"
                                                                                id="timesguessed" name="timesguessed" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['timesguessed'];?>
" /><br /><small>Maximum 36 Characters</small>
                                                                </p>

</fieldset>
<div class="clearfix clear"></div>
<fieldset class="column-right">
<p><label>Time Stamp</label><input class="text-input medium-input" id="dateguessed" name="dateguessed" value="<?php echo time();?>
" readonly /><br /><small><?php echo smarty_modifier_date_format(time());?>
</small></p>

                                                                <p>
                                                                        <input class="button" type="submit" value="Submit" />
                                                                </p>

                                                        </fieldset>

                                                        <div class="clear"></div><!-- End .clear -->

                                                </form> <?php }?>
                                        </div> <!-- End Content Box Content -->
<?php }} ?>