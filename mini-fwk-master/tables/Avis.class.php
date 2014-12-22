<?php
	
	class Avis(){
		
		$id;
		$id_video;
		$id_compte;
		$comm;
		$note;
		
		public function __construct($id = NULL, $id_video = NULL, $id_compte = NULL, $comm = NULL, $note = NULL){
			this->id = $id;
			this->id_video = $id_video;
			this->id_compte = $id_compte;
			this->comm = $comm;
			this->note = $note;
		}
		
	}
	
?>
		