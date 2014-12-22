<?php
class inscription extends module
{
	public function action_index ()
	{
		$this->set_title("Formulaire d'inscription");		


		
		//construction d'un formulaire manuellement
		//chaque champ est ajouté par appel de fonction
		$f=new Form("?module=inscription&action=valide","form1");
			$f->add_text("login","login","Login");		
			$f->add_text("mail","mail","M@il");		
			$f->add_password("pass1","pass1","Password");		
			$f->add_password("pass2","pass2","retapez...");		
	

		//règles de validation automatiques
				
		$f->login->set_validation("required");
		$f->mail->set_validation("mail");
		$f->pass1->set_validation("required");
		$f->pass2->set_validation("equals-field:pass1");		
		//$f->mail->set_validation("min-length:10");		


		$f->add_submit("Valider","bntval")->set_value('Valider');		

		//exemple de pré-remplissage du formulaire avec des valeurs par défaut
		$f->populate(array("login"=>"Exemple", "rad1"=>"two", "nom"=>"Nom de Famille"));


		//passe le formulaire dans le template sous le nom "form"
		$this->tpl->assign("form",$f);	
		
		//stocke la structure du formulaire dans la session sous le nom "form"
		//pour une éventuelle réutilisation
		$this->session->form = $f;
		
	}
	public function action_valide(){

		$this->set_title("Inscription");
		$err=false;
		//on récupère la structure du formulaire précédemment stocké dans la session
		$form=$this->session->form;
		$form->reset_errors();
		//$form->valid();
		//echo $form->valid();
		if($form->check() == true)
			$err=false;
		//faire les tests de vérification de remplissage/format des champs
		//... expressions régulières, etc.
		
		//dans cet exemple, on vérifie seulement si le login est vide et s'il n'existe pas dans la base

		if($this->requete->login == ''){
			$err=true;
			$form->login->set_error(true);
			$form->login->set_error_message("champ vide !");
		}
	
		//Appel à la BD via objet MembreManager
		elseif( MembreManager::chercherParLogin( $this->requete->login) !== false){
			$form->login->set_error(true);
			$form->login->set_error_message("login existant !");			
			$err=true;	
		 }

		if( MembreManager::chercherParMail( $this->requete->mail) !== false){
			$form->mail->set_error(true);
			$form->mail->set_error_message("mail existant !");			
			$err=true;	
		 }


		//autres tests
		//...
		
		
		//si un des tests a échoué
		if($err){	
		
			$this->site->ajouter_message('contrôle form : remplir les champs (uniquement login dans cet exemple)',ALERTE);			

		
			//on pré-remplit avec les valeurs déjà saisies
			$form->populate();		
			//passe le formulaire dans le template sous le nom "form"
			$this->tpl->assign("form",$form);
		}
		//tous les tests ont été validés
		else{
			$pass = $this->requete->pass1;
			$pass = md5($pass);
			
			//création d'une instance de Membre
			$m=new Membre($this->requete->login,
						$this->requete->mail,
						$pass
						);

			//enregistrement (insertion) dans la base
			MembreManager::creer($m);

			//passe un message pour la page suivante
			$this->site->ajouter_message('L\'utilisateur est enregistré');			

			//redirige vers le module par défaut
			$this->site->redirect('index');
		}
			



	}
	
	public function action_verif()
	{
	
	
	}






}




?>