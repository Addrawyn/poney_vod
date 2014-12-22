<?php /* Smarty version Smarty-3.1.1, created on 2014-12-10 00:37:07
         compiled from "modules\Compte\tpl\information.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30204548781474bbf11-99561541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1612276c3e11b3bbaa066ac3fc60053b09a2f7e' => 
    array (
      0 => 'modules\\Compte\\tpl\\information.tpl',
      1 => 1418168223,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30204548781474bbf11-99561541',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_5487814750e31',
  'variables' => 
  array (
    'Compte' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5487814750e31')) {function content_5487814750e31($_smarty_tpl) {?><div class="menu_compte">
	<ul class="nav_compte">		
		<li><a href='?module=Connexion&action=deconnect'>Informations personnelles</a></li>
		<li><a href='?module=Compte&action=information'>Informations de paiements</a></li>
		<li><a href='?module=Compte&action=information'>Ma bibliothèque</a></li>
		
	</ul>
</div>
<div class="Information">
	<p>
		Votre pseudo : <?php echo $_smarty_tpl->tpl_vars['Compte']->value->login;?>
 <br/>
		Votre mail   : <?php echo $_smarty_tpl->tpl_vars['Compte']->value->mail;?>
 <br/>
	</p>
</div><?php }} ?>