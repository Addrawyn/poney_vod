<?php /* Smarty version Smarty-3.1.1, created on 2014-12-11 00:30:39
         compiled from "modules\Admin\tpl\supprimer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209325488b9711f6589-97555088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3823e936ddda6835904c0c4d6e138c20aaaf0d02' => 
    array (
      0 => 'modules\\Admin\\tpl\\supprimer.tpl',
      1 => 1418254229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209325488b9711f6589-97555088',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_5488b971241da',
  'variables' => 
  array (
    'titre' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5488b971241da')) {function content_5488b971241da($_smarty_tpl) {?>
<div class="alert alert-warning"><h2>Suppression de <?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</h2></div>

<div class='jumbotron'>
	<p>Suppression à exécuter dans le module...</p>
	<p>Normalement on n'atterrit pas sur cette page, une redirection doit être faite</p>
	<p>Sauf si on désire proposer une confirmation à cet endroit (en plus ou en remplacement de la boite de dialogue)</p>
	
	<p class='text-right'>
		<a href="?module=Video&action=supprime&$id" class='btn btn-danger'>Supprimer</a>
		<a href="?module=Admin&action=index" class='btn btn-default'>Annuler</a>
	</p>	
</div><?php }} ?>