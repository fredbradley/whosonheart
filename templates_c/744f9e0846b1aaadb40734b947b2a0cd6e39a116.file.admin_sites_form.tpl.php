<?php /* Smarty version Smarty-3.1.8, created on 2012-04-16 17:59:12
         compiled from "/Users/fredbradley/Sites/smarty_site/simplysofas/templates/admin_sites_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4220078184f86e600ca6ad3-39795615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '744f9e0846b1aaadb40734b947b2a0cd6e39a116' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/simplysofas/templates/admin_sites_form.tpl',
      1 => 1334595550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4220078184f86e600ca6ad3-39795615',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f86e600caa387_10122732',
  'variables' => 
  array (
    'action' => 0,
    'edit' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f86e600caa387_10122732')) {function content_4f86e600caa387_10122732($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/fredbradley/Sites/smarty_site/libs/plugins/modifier.date_format.php';
?> <div class="content-box-header">

                                        <h3>Add Site</h3>


                                        <div class="clear"></div>

                                </div> <!-- End .content-box-header -->

                                <div class="content-box-content">

<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=='delete'){?>
<form action="index.php?<?php echo $_SERVER['QUERY_STRING'];?>
" method="post">
<fieldset class="column-left">
<p>Are you 100% sure you want to delete <span class="highlight"><?php echo $_smarty_tpl->tpl_vars['edit']->value['server_name'];?>
</span> from the database?</p>
<p>There is no recovering this method, apart from adding the entire content of the site again!</p>
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
                                                                        <label>Server Host</label>
                                                                                <input class="text-input medium-input" type="text" id="server_name" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['server_name'];?>
" name="server_name" />
                                                                </p>
<input type="hidden" name="template" id="template" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['template'];?>
" />
                                                                <p>
                                                                        <label>Site Name</label>
                                                                        <input
										class="text-input medium-input" 
										type="text" 
										id="name" 
										name="name" 
										value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['name'];?>
" 
									/> 
                                                                </p>

								<p>
									<label>Meta Keywords</label>
									<input class="text-input medium-input" type="text" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['keywords'];?>
" id="keywords" name="keywords" />
							</p>
                                                                <p>
                                                                        <label>Meta Description</label>
									<textarea class="text-input textarea" id="description" name="description" cols="30" rows="5"><?php echo $_smarty_tpl->tpl_vars['edit']->value['description'];?>
</textarea>
                                                                </p>
								</fieldset><fieldset class="column-right">
 <p>
                                                                        <label>Title</label>
                                                                        <input class="text-input medium-input" type="text"
                                                                                id="title" name="title" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['title'];?>
" /><br /><small>Maximum 36 Characters</small>
                                                                </p>
								<p><label>Offer Subhead</label>
								<input class="text-input medium-input" id="offer_subhead" name="offer_subhead" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['offer_subhead'];?>
" />
								<br /><small>Maximum 27 Characters</small></p>
								 <p>
                                                                        <label>Offer Description</label>
                                                                        <textarea class="text-input textarea wysiwyg" id="offer_description" name="offer_description" cols="70" rows="15"><?php echo $_smarty_tpl->tpl_vars['edit']->value['offer_description'];?>
</textarea>
                                                               <br /><small>Maximum 550 Characters</small> </p>
</fieldset>
<div class="clearfix clear"></div>
<fieldset>
 <p>
                                                                        <label>Video Embed Code</label>
                                                                        <textarea class="text-input medium-input textarea" id="video" name="video" cols="10" rows="10"><?php echo $_smarty_tpl->tpl_vars['edit']->value['video'];?>
</textarea>
								<br /><small>Full Embed Code. Width: 598px. Recommended Height: 335px.</small>
                                                                </p>                                                               
	<p><label>Content Heading</label>
	<input class="text-input medium-input" id="content_heading" name="content_heading" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['content_heading'];?>
" />
	</p>
 <p>
                                                                        <label>Content HTML</label>
                                                                        <textarea class="text-input wysiwyg textarea" id="content_html" name="content_html" cols="70" rows="15"><?php echo $_smarty_tpl->tpl_vars['edit']->value['content_html'];?>
</textarea>
                                                                </p>
</fieldset><fieldset class="column-left">
<p><label>Box One Headline</label><input class="text-input medium-input" id="box_one_headline" name="box_one_headline" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['box_one_headline'];?>
" /></p>
<p><label>Box One Content</label><textarea class="text-input medium-input textarea" id="box_one" name="box_one" cols="10" rows="5"><?php echo $_smarty_tpl->tpl_vars['edit']->value['box_one'];?>
</textarea></p>
<p><label>Box Two Headline</label><input class="text-input medium-input" id="box_two_headline" name="box_two_headline" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['box_two_headline'];?>
" /></p>
<p><label>Box Two Content</label><textarea class="text-input medium-input textarea" id="box_two" name="box_two" cols="10" rows="5"><?php echo $_smarty_tpl->tpl_vars['edit']->value['box_two'];?>
</textarea></p>
<p><label>Box Three Headline</label><input class="text-input medium-input" id="box_three_headline" name="box_three_headline" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['box_three_headline'];?>
" /></p>
<p><label>Box Three Content</label><textarea class="text-input medium-input textarea" id="box_three" name="box_three" cols="10" rows="5"><?php echo $_smarty_tpl->tpl_vars['edit']->value['box_three'];?>
</textarea></p>
</fieldset><fieldset class="column-right">
<p><label>Google Analytics Code</label><input class="text-input medium-input" id="analytics" name="analytics" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['analytics'];?>
" /></p>
<p><label>Time Stamp</label><input class="text-input medium-input" id="updated" name="updated" value="<?php echo time();?>
" readonly /><br /><small><?php echo smarty_modifier_date_format(time());?>
</small></p>
<p><label>Last Updated By</label><input class="text-input medium-input" id="updatedby" name="updatedby" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" readonly /><br /><small>That's <i><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</i> to you and I!</small> 

                                                                <p>
                                                                        <input class="button" type="submit" value="Submit" />
                                                                </p>

                                                        </fieldset>

                                                        <div class="clear"></div><!-- End .clear -->

                                                </form> <?php }?>
                                        </div> <!-- End Content Box Content -->
<?php }} ?>