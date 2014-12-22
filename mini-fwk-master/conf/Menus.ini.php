<?php
$t=CategorieManager::recup_categorie();
$tmp=array();
	foreach($t as $nom)
	{
		$tmp[$nom->nomcategorie]='?module=categorie&id='.$nom->id_categorie;
	}

$menus['Catégorie']=$tmp




/*$menus['Exemples']=array(
	'SimpleTPL'=>"?module=SimpleTemplate&id=?",
	'Formulaire'=>"?module=Formulaire",
	'C.R.U.D'=>"?module=CRUD",	
	'Redirect'=>"?module=Redirect",
	'Download'=>"?module=DownloadFile",
	'Ajax'=>"?module=Ajax"
	);
$menus['Test']="?module=TestMembre";*/
?>