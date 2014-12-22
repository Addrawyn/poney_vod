<?php /* Smarty version Smarty-3.1.1, created on 2014-12-10 22:17:52
         compiled from "modules\CRUD\tpl\supprimer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45675488b880083183-46807258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9e3238562b6bb833de4fc0f5737c707401defd0' => 
    array (
      0 => 'modules\\CRUD\\tpl\\supprimer.tpl',
      1 => 1416352684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45675488b880083183-46807258',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'reference' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_5488b8800e0e3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5488b8800e0e3')) {function content_5488b8800e0e3($_smarty_tpl) {?>
<div class="alert alert-warning"><h2>Suppression de <?php echo $_smarty_tpl->tpl_vars['reference']->value;?>
</h2></div>

<div class='jumbotron'>
	<p>Suppression à exécuter dans le module...</p>
	<p>Normalement on n'atterrit pas sur cette page, une redirection doit être faite</p>
	<p>Sauf si on désire proposer une confirmation à cet endroit (en plus ou en remplacement de la boite de dialogue)</p>
	
	<p class='text-right'>
		<a href="#" class='btn btn-danger'>Supprimer</a>
		<a href="#" class='btn btn-default'>Annuler</a>
	</p>	
</div><?php }} ?>