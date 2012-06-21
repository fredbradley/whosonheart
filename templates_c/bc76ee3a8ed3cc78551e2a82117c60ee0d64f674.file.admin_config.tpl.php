<?php /* Smarty version Smarty-3.1.8, created on 2012-06-21 22:57:16
         compiled from "/kunden/homepages/3/d298570323/htdocs/_smarty_sites/whosonheart/templates/admin_config.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12003163924fe048bc36f720-86758099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc76ee3a8ed3cc78551e2a82117c60ee0d64f674' => 
    array (
      0 => '/kunden/homepages/3/d298570323/htdocs/_smarty_sites/whosonheart/templates/admin_config.tpl',
      1 => 1340312234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12003163924fe048bc36f720-86758099',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fe048bc395cb8_89415540',
  'variables' => 
  array (
    'answers' => 0,
    'answer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fe048bc395cb8_89415540')) {function content_4fe048bc395cb8_89415540($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/homepages/3/d298570323/htdocs/_smarty_sites/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_relative_date')) include '/homepages/3/d298570323/htdocs/_smarty_sites/libs/plugins/modifier.relative_date.php';
?><table>
	<thead>
		<tr>
			<th>Celebrity</th>
			<th>Listener</th>
			<th>Word</th>
			<th>When</th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['answer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['answer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['answers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['answer']->key => $_smarty_tpl->tpl_vars['answer']->value){
$_smarty_tpl->tpl_vars['answer']->_loop = true;
?>
	<tr>
		<td><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['answer']->value['name']);?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['answer']->value['listener'];?>
</td>
		<td>"<?php echo $_smarty_tpl->tpl_vars['answer']->value['word'];?>
"</td>
		<td><?php echo smarty_modifier_relative_date($_smarty_tpl->tpl_vars['answer']->value['time']);?>
</td>
	</tr>
<?php } ?>
</tbody>
</table>
<br />
<h3 style="float:left; "><a href="#addanswer" rel="modal">Add another correct answer</a></h3><h3 style="float:right;"><a href="#deleteanswer" rel="modal">Correct An Answer</a></h3>
<div style="display:none;" id="addanswer">
<h3>Add An Answer</h3>
<form action="/admin/index.php" method="post">
<fieldset class="column-left">
<p><label for="answer">Answer</label><input class="text-input medium-input" type="text" name="answer" /><br /><small>"Tina Turner"</small>
</p><p><label for="listener">Listener's Name</label><input class="text-input medium-input" type="text" name="listener" /><br /><small>"Katie O'Brien"</small>
</p>
</fieldset><fieldset class="column-right">
<p><label for="word">Word</label><input type="text" name="word" class="text-input medium-input" /><br /><small>"Who's"</small>
</p><p><label for="prize">Prize</label><input type="text" name="prize" class="text-input medium-input" /><br /><small>The ammount of money won. <br />No &quot;&pound;&quot; sign needed.</small></p>
</fieldset>
<fieldset class="clear">
<p><label for="newslink">News Page URL</label><input type="text" name="newslink" class="text-input large-input" /><br /><small>http://www.heart.co.uk/some/news/page/article</small></p>
<input type="hidden" name="addanswer" value="1" />
<input type="submit" value="Add Answer" class="button" /></fieldset>
</form></div>
<div style="display:none;" id="deleteanswer">
<h3>Delete An Answer</h3>
<form action="/admin/index.php" method="post">
<p>To delete an answer please type in the box below the full name of the celebrity guessed.</p>
<p><label for="answer">Celebrity</label><input class="text-input medium-input" type="Text" name="celebrity" /><br /><small>Tina Turner</small></p>
<input type="hidden" name="deleteanswer" value="1" />
<input type="submit" value="Delete Answer" class="button" />
<br /><small>There is 'Confirm' stage, please ensure that you really want to do this!</small>
</form>
</div>
<?php }} ?>