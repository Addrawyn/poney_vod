<?php /* Smarty version Smarty-3.1.1, created on 2014-12-10 09:45:14
         compiled from "templates\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10058547584d97931c3-92815260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6aae8c641d21506c83b2eef3095b796e7ec90482' => 
    array (
      0 => 'templates\\main.tpl',
      1 => 1418201107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10058547584d97931c3-92815260',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_547584d98d8d2',
  'variables' => 
  array (
    'titre' => 0,
    'menus' => 0,
    'data' => 0,
    'm' => 0,
    'shref' => 0,
    'sm' => 0,
    'Bloc_Login' => 0,
    'Bloc_Gestion' => 0,
    'module' => 0,
    'messages' => 0,
    'bloc_contenu' => 0,
    'affichages' => 0,
    'erreurs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547584d98d8d2')) {function content_547584d98d8d2($_smarty_tpl) {?><!-- start template-->
<html>
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title>
		<script src='js/jquery-1.10.2.min.js'></script>
		<script src='js/jquery-ui-1.10.3.custom.min.js'></script>	
		<script src='styles/bootstrap/js/bootstrap.min.js'></script>	
		<script src='js/default.js'></script>	
		<link rel='stylesheet' href='styles/ui-lightness/jquery-ui-1.10.3.custom.min.css' />
		<link rel='stylesheet' href='styles/bootstrap/css/bootstrap.css' />	
		<link rel='stylesheet' href='styles/defaut.css' />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>


		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="?">MiniFWK</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
				<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['m']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
					<?php if (!is_array($_smarty_tpl->tpl_vars['data']->value)){?>
						<li><a id='A_<?php echo $_smarty_tpl->tpl_vars['m']->value;?>
' href='<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['m']->value;?>
</a></li>
					<?php }else{ ?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['m']->value;?>
 <b class="caret"></b></a>
							<ul class="dropdown-menu">
							<?php  $_smarty_tpl->tpl_vars['shref'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shref']->_loop = false;
 $_smarty_tpl->tpl_vars['sm'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shref']->key => $_smarty_tpl->tpl_vars['shref']->value){
$_smarty_tpl->tpl_vars['shref']->_loop = true;
 $_smarty_tpl->tpl_vars['sm']->value = $_smarty_tpl->tpl_vars['shref']->key;
?>	
								<li>
								<a href='<?php echo $_smarty_tpl->tpl_vars['shref']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['sm']->value;?>
</a>
								</li>
							<?php } ?>			        
							</ul>
						</li>
					<?php }?>
				<?php } ?>
				</ul>	
				<!--<form action="" class="formulaire">
                <input class="champ" type="text" value="Search...)"/>
                <input class="bouton" type="button" value=" " />
                </form>-->
				<ul class="nav navbar-nav navbar-right">
					<li><a href="Doc">Documentation</a></li>			
				</ul>
				<?php echo $_smarty_tpl->tpl_vars['Bloc_Login']->value;?>
	
				<?php echo $_smarty_tpl->tpl_vars['Bloc_Gestion']->value;?>

		</nav>


    <div class="container">
		<ol class="breadcrumb">
			<li><a href="?module">Home</a></li>
			<li><a href="?module=<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['module']->value;?>
</a></li>
			<li class="active"><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</li>
		</ol>

		<?php if ($_smarty_tpl->tpl_vars['messages']->value){?>
			<div class="bs-callout bs-callout-danger">
				<h4>Zone de messages transmis par <code>Site::ajouter_message():</code></h4>
				<?php echo $_smarty_tpl->tpl_vars['messages']->value;?>

			</div>
		<?php }?>


		<div id='module'>
			<?php echo $_smarty_tpl->tpl_vars['bloc_contenu']->value;?>

		</div>			
				<?php if ($_smarty_tpl->tpl_vars['affichages']->value){?>
			<div class='alert alert-info'>
				<h4>Affichages divers</h4>
				<p>
				<?php echo $_smarty_tpl->tpl_vars['affichages']->value;?>

				</p>
			</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['erreurs']->value){?>
			<div class='alert alert-warning'>
				<h4>Erreurs diverses</h4>			
				<p>
				<?php echo $_smarty_tpl->tpl_vars['erreurs']->value;?>

				</p>
			</div>
			<?php }?>
	</div>
	</body>
		
</html>
<!-- end template--><?php }} ?>