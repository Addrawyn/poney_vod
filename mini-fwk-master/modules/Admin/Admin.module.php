 <?php
	class admin extends Module{
	
		public function action_index(){
			$this->set_title("Gestion Video");

			//création de variables PHP
			//on récupère de la base de données des éléments
			$a=VideoManager::allvideo();
						
			//passe les variables au template		
			$this->tpl->assign('a',$a);
		}
			public function action_modifier(){
			$this->set_title("Modifier");
		
			//recupère l'id et la titre 
			$id = $this->req->id;
			$ref= $this->req->titre;
			
			//passe ces informations dans le template
			
			$this->tpl->assign("id",$id);
			$this->tpl->assign("titre",$titre);			
		
			
		}
		public function action_supprimer(){
			$this->set_title("Supprimer");

			//recupère l'id et la titre 
			$id = $this->req->id;
			$titre= $this->req->titre;
			
			//passe ces informations dans le template
			
			$this->tpl->assign("id",$id);
			$this->tpl->assign("titre",$titre);		
			
		}
		

		public function action_ajouter(){
			$this->set_title("Ajouter");	
		//..préparer un formulaire	
			
		}

		public function action_detail(){
			$this->set_title("Détail");	
			
			//recupère l'id et la titre 
			$id = $this->req->id;
			$ref= $this->req->titre;
			
			//passe ces informations dans le template
			
			$this->tpl->assign("id",$id);
			$this->tpl->assign("titre",$titre);			
			
			
		}
	}
	
	
	
?>