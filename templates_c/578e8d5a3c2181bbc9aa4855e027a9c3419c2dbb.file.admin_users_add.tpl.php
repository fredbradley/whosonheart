<?php /* Smarty version Smarty-3.1.8, created on 2012-04-12 14:58:07
         compiled from "/Users/fredbradley/Sites/smarty_site/simplysofas/templates/admin_users_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11832400514f86dd4f3d55b8-19358165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '578e8d5a3c2181bbc9aa4855e027a9c3419c2dbb' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/simplysofas/templates/admin_users_add.tpl',
      1 => 1334238918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11832400514f86dd4f3d55b8-19358165',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f86dd4f3f9f60_73458785',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f86dd4f3f9f60_73458785')) {function content_4f86dd4f3f9f60_73458785($_smarty_tpl) {?> <div class="content-box-header">

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