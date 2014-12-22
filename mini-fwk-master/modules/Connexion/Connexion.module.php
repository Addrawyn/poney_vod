<?php
class Connexion extends Module{
			

	public function action_login(){

		// A FAIRE
		// verifier les donnees de connexion
		//charger le membre
		//$user=Membre::chercherParId(/*mettre l'id*/);
		//$this->session->ouvrir($user);
		
		//code de demo
		//$m=new Membre();
		$r = $this->req->Login;
		$m=MembreManager::chercherParLogin($r);
		$pass = $this->req->Pass;
		$pass = md5($pass);
		if ($m==false)
		{
			$this->site->ajouter_message("L'utilisateur n'existe pas");
			$this->site->redirect("index");
		}
		else if ($m->pass==$pass)
		{
		$this->session->user=$m;		
		$this->tpl->assign('login',$m->login);
		$this->site->ajouter_message("Vous êtes connecté en tant que ".$m->login);
		$this->site->redirect("index");
		}
		else
		{
			$this->site->ajouter_message("Erreur de mot de passe");
			$this->site->redirect("index");
		}
	}

	public function action_deconnect(){		
		$this->site->ajouter_message('Vous êtes déconnecté');							
		$this->session->fermer(); 			
		$this->site->redirect("index");
	}

}
?>