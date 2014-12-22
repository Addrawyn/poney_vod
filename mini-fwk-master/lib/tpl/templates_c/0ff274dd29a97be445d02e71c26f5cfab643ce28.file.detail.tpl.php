<?php /* Smarty version Smarty-3.1.1, created on 2014-12-11 08:00:53
         compiled from "modules\Admin\tpl\detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1497754894125b5d7f5-25049128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ff274dd29a97be445d02e71c26f5cfab643ce28' => 
    array (
      0 => 'modules\\Admin\\tpl\\detail.tpl',
      1 => 1416352684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1497754894125b5d7f5-25049128',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'reference' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_54894125bdbb9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54894125bdbb9')) {function content_54894125bdbb9($_smarty_tpl) {?>
<div class="alert alert-info"><h2>Aperçu de <?php echo $_smarty_tpl->tpl_vars['reference']->value;?>
</h2></div>

<div class='jumbotron'>
	<p>Afficher les détails de l'enregistrement...</p>
	<a href="#" class='btn btn-danger'>Supprimer</a>
	<a href="#" class='btn btn-default'>Modifier</a>
</div><?php }} ?>