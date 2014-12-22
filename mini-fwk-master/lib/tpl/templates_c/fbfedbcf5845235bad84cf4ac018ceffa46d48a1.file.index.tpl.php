<?php /* Smarty version Smarty-3.1.1, created on 2014-12-11 00:28:47
         compiled from "modules\Admin\tpl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2530054884e4b11e5f9-29021777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbfedbcf5845235bad84cf4ac018ceffa46d48a1' => 
    array (
      0 => 'modules\\Admin\\tpl\\index.tpl',
      1 => 1418254120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2530054884e4b11e5f9-29021777',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_54884e4b50374',
  'variables' => 
  array (
    'a' => 0,
    'video' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54884e4b50374')) {function content_54884e4b50374($_smarty_tpl) {?>
<script>
//demande confirmation sur click d'un bouton supprimer
$(function() {
	//sur click d'un bouton de suppression
	$('a.glyphicon-remove').click(function(ev){
		//récupérer le href du lien
		//et l'utiliser pour le bouton de confirmation
		$('#go').attr("href",$(this).attr('href'))	

		//afficher la boite de dialogue
		$('#myModal').modal();
	
		//supprimer le comportement par défaut du lien d'origine
		ev.preventDefault();				
	})


//efface les données de la boite de dialogue après affichage
	$('body').on('hidden.bs.modal', '.modal', function () {
    	$(this).removeData('bs.modal');
    });	
	
	
});
</script>


<h2>Liste des videos</h2>
	<p class="text-right">
		<a href='?module=Admin&action=ajouter' class='btn btn-success glyphicon glyphicon-plus'> Ajouter</a>
	</p>
<h3>Liste</h3>
	<table class='table table-striped'>
		<thead>
			<th>id</th><th>Titre</th><th>Sortie</th><th>Prix</th>
		</thead>
		<tbody>
		<?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_smarty_tpl->tpl_vars['ligne'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['a']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value){
$_smarty_tpl->tpl_vars['video']->_loop = true;
 $_smarty_tpl->tpl_vars['ligne']->value = $_smarty_tpl->tpl_vars['video']->key;
?>
			<tr class='table-striped'>
				<td><?php echo $_smarty_tpl->tpl_vars['video']->value->id;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['video']->value->titre;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['video']->value->sortie;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['video']->value->prix;?>
</td>
				<td>
					<!--voir le détail-->
					<a class='glyphicon glyphicon-search' 
						data-toggle="modal" 
						data-target="#inclusionModal" 
						href='?module=Admin&action=detail&id=<?php echo $_smarty_tpl->tpl_vars['video']->value->id;?>
&titre=<?php echo $_smarty_tpl->tpl_vars['video']->value->titre;?>
&displayModuleInDialog=1'>
					</a> 				

					<!--modifier-->
					<a class='glyphicon glyphicon-pencil' 
						data-toggle="modal" 
						data-target="#inclusionModal"
						href='?module=Admin&action=modifier&id=<?php echo $_smarty_tpl->tpl_vars['video']->value->id;?>
&titre=<?php echo $_smarty_tpl->tpl_vars['video']->value->titre;?>
&displayModuleInDialog=1'>
					</a>

					<!--supprimer-->
					<a class='glyphicon glyphicon-remove' title='<?php echo $_smarty_tpl->tpl_vars['video']->value->titre;?>
' 
						href='?module=Admin&action=supprimer&id=<?php echo $_smarty_tpl->tpl_vars['video']->value->id;?>
&titre=<?php echo $_smarty_tpl->tpl_vars['video']->value->titre;?>
'></a>				
				</td>
			</tr>
		<?php }
if (!$_smarty_tpl->tpl_vars['video']->_loop) {
?>	
			<tr><td colspan='3'>Aucune donnée</td></tr>
		<?php } ?>
		</tbody>
	</table>
	
	
	
	
	
	
<!-- boite de dialogue confirmation -->
<!-- exemple du site getbootstrap -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
      </div>
      <div class="modal-body">
        Êtes vous sûr de vouloir supprimer la video ? 
      </div>
      <div class="modal-footer">
        <a href="?module=Admin&action=index" class="btn btn-default" data-dismiss="modal">Fermer</a>
        <a href="?module=Admin&action=supprimer" class="btn btn-primary" id='go'>Confirmer</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

	
	
<!-- boite de dialogue inclusion-->
<div class="modal fade" id="inclusionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
	    Contenu vide remplacé par le module...
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><?php }} ?>