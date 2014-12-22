<?php /* Smarty version Smarty-3.1.1, created on 2014-12-10 14:43:12
         compiled from "blocs\Gestion.bloc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2847754880ba0715496-88973514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '661afeff058864962d3af18126caa13209931cbf' => 
    array (
      0 => 'blocs\\Gestion.bloc.tpl',
      1 => 1418218989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2847754880ba0715496-88973514',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_54880ba075f52',
  'variables' => 
  array (
    'login' => 0,
    'admin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54880ba075f52')) {function content_54880ba075f52($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['login']->value)){?>	
	<li><a href='?module=Compte&action=infoPerso'>Mon compte</a></li>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['admin']->value==1){?>
	<li><a href='?module=Admin&action=index'>Admin</a></li>
<?php }?>
</ul>
</div><?php }} ?>