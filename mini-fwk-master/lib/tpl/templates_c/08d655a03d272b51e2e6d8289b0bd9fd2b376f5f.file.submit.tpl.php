<?php /* Smarty version Smarty-3.1.1, created on 2014-11-26 09:06:56
         compiled from "templates\champs\submit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1449554758a20d34ce3-09910558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08d655a03d272b51e2e6d8289b0bd9fd2b376f5f' => 
    array (
      0 => 'templates\\champs\\submit.tpl',
      1 => 1416352684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1449554758a20d34ce3-09910558',
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
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_54758a20d738a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54758a20d738a')) {function content_54758a20d738a($_smarty_tpl) {?><div class='form-group <?php echo $_smarty_tpl->tpl_vars['f_error']->value;?>
'>
<label class='col-sm-6 control-label <?php echo $_smarty_tpl->tpl_vars['f_error']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['f_required']->value;?>
' for='<?php echo $_smarty_tpl->tpl_vars['f_id']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['f_label']->value;?>
</label>
<div class='col-sm-2'>
<input type='submit' name='<?php echo $_smarty_tpl->tpl_vars['f_name']->value;?>
' id='<?php echo $_smarty_tpl->tpl_vars['f_id']->value;?>
' class='form-control' value='<?php echo $_smarty_tpl->tpl_vars['f_value']->value;?>
'>
</div>
</div><?php }} ?>