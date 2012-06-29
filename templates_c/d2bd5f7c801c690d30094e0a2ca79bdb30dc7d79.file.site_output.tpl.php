<?php /* Smarty version Smarty-3.1.8, created on 2012-06-29 11:36:30
         compiled from "/Users/fredbradley/Sites/smarty_site/whosonheart/templates/site_output.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19379393884fdf4f01dc3884-78770913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2bd5f7c801c690d30094e0a2ca79bdb30dc7d79' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/whosonheart/templates/site_output.tpl',
      1 => 1340966189,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19379393884fdf4f01dc3884-78770913',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fdf4f01e34543_79290375',
  'variables' => 
  array (
    'guesses' => 0,
    'guess' => 0,
    'return' => 0,
    'nextplay' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fdf4f01e34543_79290375')) {function content_4fdf4f01e34543_79290375($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/Users/fredbradley/Sites/smarty_site/libs/plugins/modifier.capitalize.php';
?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['guesses']->value[1];?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['guesses']->value[2];?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['guesses']->value[0];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp1||$_tmp2||$_tmp3){?>
<?php echo '<?xml';?> version="1.0" <?php echo '?>';?>

<whosonheart>
	<guesses>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['guesses']->value[0];?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4){?>
		<guess>
			<searched><?php echo $_smarty_tpl->tpl_vars['guess']->value['guess1'];?>
</searched>
			<output><![CDATA[<?php echo $_smarty_tpl->tpl_vars['guesses']->value[0];?>
]]></output>
			<return><?php echo $_smarty_tpl->tpl_vars['return']->value[0];?>
</return>
		</guess>
<?php }?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['guesses']->value[1];?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp5){?>
		<guess>
			<searched><?php echo $_smarty_tpl->tpl_vars['guess']->value['guess2'];?>
</searched>
			<output><![CDATA[<?php echo $_smarty_tpl->tpl_vars['guesses']->value[1];?>
]]></output>
			<return><?php echo $_smarty_tpl->tpl_vars['return']->value[1];?>
</return>
		</guess>
<?php }?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['guesses']->value[2];?>
<?php $_tmp6=ob_get_clean();?><?php if ($_tmp6){?>
		<guess>
			<searched><?php echo $_smarty_tpl->tpl_vars['guess']->value['guess3'];?>
</searched>
			<output><![CDATA[<?php echo $_smarty_tpl->tpl_vars['guesses']->value[2];?>
]]></output>
			<return><?php echo $_smarty_tpl->tpl_vars['return']->value[2];?>
</return>
		</guess>
<?php }?>
	</guesses>
	<nextplay><?php echo $_smarty_tpl->tpl_vars['nextplay']->value;?>
</nextplay>	
	<share>
		<twitter>I just searched the #WhosOnHeart database for<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['guesses']->value[0];?>
<?php $_tmp7=ob_get_clean();?><?php if ($_tmp7){?> <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['guess']->value['guess1']);?>
, <?php }?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['guesses']->value[1];?>
<?php $_tmp8=ob_get_clean();?><?php if ($_tmp8){?><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['guess']->value['guess2']);?>
<?php }?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['guesses']->value[2];?>
<?php $_tmp9=ob_get_clean();?><?php if ($_tmp9){?> &amp; <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['guess']->value['guess3']);?>
<?php }?></twitter>
	</share>
</whosonheart>
<?php }else{ ?>
<whosonheart>
	<error><![CDATA[I don't think you searched for anything!]]></error>
	<nextplay><?php echo $_smarty_tpl->tpl_vars['nextplay']->value;?>
</nextplay>
</whosonheart>
<?php }?>
<?php }} ?>