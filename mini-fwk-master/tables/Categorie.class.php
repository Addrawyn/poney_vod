<?php

class Categorie{

	public $id_categorie;
	public $nomcategorie;
	
	public function __construct($id_categorie=NULL, $nomcategorie=NULL){
		$this->id_categorie = $id_categorie;
		$this->nomcategorie = $nomcategorie;
	
	}

}
?>