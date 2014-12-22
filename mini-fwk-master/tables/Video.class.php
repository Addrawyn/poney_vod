<?php
	class video{
		
		public $id;
		public $titre;
		public $sortie;
		public $video;
		public $ba;
		public $resume;
		public $prix;
		
		public function __construct($id=NULL, $titre=NULL, $sortie=NULL, $video=NULL, $ba=NULL, $resume=NULL, $prix=NULL){
			
			$this->id = $id;
			$this->titre = $titre;
			$this->sortie = $sortie;
			$this->video = $video;
			$this->ba = $ba;
			$this->resume = $resume;
			$this->prix = $prix;
			
		}
	}
?>
		