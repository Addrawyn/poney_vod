<?php /* Smarty version Smarty-3.1.1, created on 2014-11-26 08:50:25
         compiled from "templates\erreur.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64854758641a879b1-94407427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdd211a162f6574be7b02e819d20d9c79bf073fb' => 
    array (
      0 => 'templates\\erreur.tpl',
      1 => 1416352684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64854758641a879b1-94407427',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titre' => 0,
    'Bloc_Login' => 0,
    'menus' => 0,
    'href' => 0,
    'm' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_54758641af6a1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54758641af6a1')) {function content_54758641af6a1($_smarty_tpl) {?><!-- start template-->
<html>
	<head>
	<title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title>
	
	<link rel='stylesheet' href='styles/defaut.css' />
	<link rel='stylesheet' href='styles/smoothness/jquery-ui-1.8.5.custom.css' />

	</head>
	<body>
	<div id='page'>
		<div id='login' title='voir le code du module Modules/Login'>Bloc login fictif &darr;
			<?php echo $_smarty_tpl->tpl_vars['Bloc_Login']->value;?>

		</div>

		<div id='entete'>
		<a href='?module=index'>Mini-FWK</a>
		</div>
	
		<div id='menu'>
			<a href='?' title='contenu'>Defaut</a> Exemples &rarr; 
			<?php  $_smarty_tpl->tpl_vars['href'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['href']->_loop = false;
 $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['href']->key => $_smarty_tpl->tpl_vars['href']->value){
$_smarty_tpl->tpl_vars['href']->_loop = true;
 $_smarty_tpl->tpl_vars['m']->value = $_smarty_tpl->tpl_vars['href']->key;
?>
			<a href='<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['m']->value;?>
</a>
			<?php } ?>
		</div>
	
	<div class='echo' style='background:#FFF9C4;border:5px red dotted;margin-top:20px'>
			<h1>Erreur</h1>
			
			<?php echo (($tmp = @$_smarty_tpl->tpl_vars['message']->value)===null||$tmp==='' ? "Le site a rencontré un problème." : $tmp);?>

			</div>


			
			
		</div>
	</div>
	</body>
		
</html>
<!-- end template-->
<?php }} ?>