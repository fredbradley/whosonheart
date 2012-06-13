<?php /* Smarty version Smarty-3.1.8, created on 2012-04-12 15:21:30
         compiled from "/Users/fredbradley/Sites/smarty_site/simplysofas/templates/admin_sites_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7939611544f86e4ea33e420-46536255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbc7240504c1d63747d4b38c37a2e7ec26b95f2a' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/simplysofas/templates/admin_sites_add.tpl',
      1 => 1334239557,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7939611544f86e4ea33e420-46536255',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f86e4ea365627_63992138',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f86e4ea365627_63992138')) {function content_4f86e4ea365627_63992138($_smarty_tpl) {?> <div class="content-box-header">

                                        <h3>Add User</h3>


                                        <div class="clear"></div>

                                </div> <!-- End .content-box-header -->

                                <div class="content-box-content">

   <form action="" method="post">

                                                        <fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->

                                                                <p>
                                                                        <label>Small form input</label>
                                                                                <input class="text-input small-input" type="text" id="small-input" name="small-input" /> <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
                                                                                <br /><small>A small description of the field</small>
                                                                </p>

                                                                <p>
                                                                        <label>Medium form input</label>
                                                                        <input class="text-input medium-input" type="text" id="medium-input" name="medium-input" /> <span class="input-notification error png_bg">Error message</span>
                                                                </p>

                                                                <p>
                                                                        <label>Large form input</label>
                                                                        <input class="text-input large-input" type="text" id="large-input" name="large-input" />
                                                                </p>

                                                                <p>
                                                                        <label>Checkboxes</label>
                                                                        <input type="checkbox" name="checkbox1" /> This is a checkbox <input type="checkbox" name="checkbox2" /> And this is another checkbox
                                                                </p>

                                                                <p>
                                                                        <label>Radio buttons</label>
                                                                        <input type="radio" name="radio1" /> This is a radio button<br />
                                                                        <input type="radio" name="radio2" /> This is another radio button
                                                                </p>

                                                                <p>
                                                                        <label>This is a drop down list</label>
                                                                        <select name="dropdown" class="small-input">
                                                                                <option value="option1">Option 1</option>
                                                                                <option value="option2">Option 2</option>
                                                                                <option value="option3">Option 3</option>
                                                                                <option value="option4">Option 4</option>
                                                                        </select>
                                                                </p>

                                                                <p>
                                                                        <label>Textarea with WYSIWYG</label>
                                                                        <textarea class="text-input textarea wysiwyg" id="textarea" name="textfield" cols="79" rows="15"></textarea>
                                                                </p>

                                                                <p>
                                                                        <input class="button" type="submit" value="Submit" />
                                                                </p>

                                                        </fieldset>

                                                        <div class="clear"></div><!-- End .clear -->

                                                </form>
                                        </div> <!-- End Content Box Content -->
<?php }} ?>