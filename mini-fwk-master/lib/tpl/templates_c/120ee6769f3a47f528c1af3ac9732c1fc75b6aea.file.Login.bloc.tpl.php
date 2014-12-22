<?php /* Smarty version Smarty-3.1.1, created on 2014-12-10 09:45:14
         compiled from "blocs\Login.bloc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5301547584d96b4881-67723849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '120ee6769f3a47f528c1af3ac9732c1fc75b6aea' => 
    array (
      0 => 'blocs\\Login.bloc.tpl',
      1 => 1418201112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5301547584d96b4881-67723849',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_547584d97682e',
  'variables' => 
  array (
    'login' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547584d97682e')) {function content_547584d97682e($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['login']->value)){?>	
<ul class="nav navbar-nav navbar-right">
	
	<li><a href='?module=Connexion&action=deconnect'><?php echo $_smarty_tpl->tpl_vars['login']->value;?>
 | Se déconnecter</a></li>
	<li><a href='?module=Compte&action=infoPerso'>Mon compte</a></li>



<?php }else{ ?>
	<form class="navbar-form navbar-right" role="form" method='POST' action="index.php?module=Connexion&action=login">
		<div class="form-group">
			<input name='Login' type="text" placeholder="Identifiant" class="form-control">
		</div>
		<div class="form-group">
			<input name='Pass' type="password" placeholder="lol" class="form-control">
		</div>
	<input type="submit" class="btn btn-success" value='Connexion'>
	<a class="btn btn-success" href="index.php?module=Inscription&action=index">Inscription</a>
	</form>
<?php }?>

<?php }} ?>