<?php /* Smarty version Smarty-3.1.1, created on 2014-11-26 09:06:56
         compiled from "templates\champs\password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1740554758a208cb873-99056512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c1250d5b24773018b86f6167aaec28646207caa' => 
    array (
      0 => 'templates\\champs\\password.tpl',
      1 => 1416352684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1740554758a208cb873-99056512',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'f_error' => 0,
    'f_required' => 0,
    'f_id' => 0,
    'f_label' => 0,
    'f_name' => 0,
    'f_value' => 0,
    'f_msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_54758a209358d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54758a209358d')) {function content_54758a209358d($_smarty_tpl) {?><div class='form-group <?php echo $_smarty_tpl->tpl_vars['f_error']->value;?>
'>
	<label class='col-sm-2 control-label <?php echo $_smarty_tpl->tpl_vars['f_error']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['f_required']->value;?>
' for='<?php echo $_smarty_tpl->tpl_vars['f_id']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['f_label']->value;?>
</label>
	<div class='col-sm-6'>
		<?php if ($_smarty_tpl->tpl_vars['f_error']->value){?>
		<div class='input-group'>
		<?php }?>
			<input type='password' name='<?php echo $_smarty_tpl->tpl_vars['f_name']->value;?>
' id='<?php echo $_smarty_tpl->tpl_vars['f_id']->value;?>
' class='form-control' value='<?php echo $_smarty_tpl->tpl_vars['f_value']->value;?>
'>
		<?php if ($_smarty_tpl->tpl_vars['f_error']->value){?>
			<span class='input-group-addon'><span class='glyphicon glyphicon-exclamation-sign'></span></span>		
		</div>
		<?php }?>		
	</div>
	<?php if ($_smarty_tpl->tpl_vars['f_msg']->value){?><span class="help-block"><?php echo $_smarty_tpl->tpl_vars['f_msg']->value;?>
</span><?php }?>
</div><?php }} ?>