<div class="menu_compte">
	<ul class="nav_compte">		
		<li><a href='?module=Compte&action=infoPerso'>Informations personnelles</a></li>
		<li><a href='?module=Compte&action=infoPaie'>Informations de paiements</a></li>
		
	</ul>
</div>
<div class="info_compte">
	<p>
		Votre pseudo : {$Compte->login} <br/>
		Votre mail   : {$Compte->mail} <br/>
		<a href='?module=Compte&action=mdp&displayModuleInDialog=1' data-toggle="modal" data-target="#inclusionModal">Modifier votre mot de passe</a>
	</p>
	
	
</div>



<div class="modal fade" id="inclusionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
	    {$form}
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>