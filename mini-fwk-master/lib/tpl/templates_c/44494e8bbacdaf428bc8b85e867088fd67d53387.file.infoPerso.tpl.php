<?php /* Smarty version Smarty-3.1.1, created on 2014-12-10 09:02:52
         compiled from "modules\Compte\tpl\infoPerso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1478954878ece9e0198-06877148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44494e8bbacdaf428bc8b85e867088fd67d53387' => 
    array (
      0 => 'modules\\Compte\\tpl\\infoPerso.tpl',
      1 => 1418198543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1478954878ece9e0198-06877148',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_54878ecea33cb',
  'variables' => 
  array (
    'Compte' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54878ecea33cb')) {function content_54878ecea33cb($_smarty_tpl) {?><div class="menu_compte">
	<ul class="nav_compte">		
		<li><a href='?module=Compte&action=infoPerso'>Informations personnelles</a></li>
		<li><a href='?module=Compte&action=infoPaie'>Informations de paiements</a></li>
		
	</ul>
</div>
<div class="info_compte">
	<p>
		Votre pseudo : <?php echo $_smarty_tpl->tpl_vars['Compte']->value->login;?>
 <br/>
		Votre mail   : <?php echo $_smarty_tpl->tpl_vars['Compte']->value->mail;?>
 <br/>
		<a href='?module=Compte&action=mdp&displayModuleInDialog=1' data-toggle="modal" data-target="#inclusionModal">Modifier votre mot de passe</a>
	</p>
	
	
</div>



<div class="modal fade" id="inclusionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
	    <?php echo $_smarty_tpl->tpl_vars['form']->value;?>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><?php }} ?>