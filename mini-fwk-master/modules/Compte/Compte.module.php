<?php
class Compte extends Module
{
	public function action_infoPerso ()
	{
			
				
		$this->set_title("Informations Personnelles");	
		if($this->session->ouverte())
		{
			$m=MembreManager::chercherParLogin($this->session->user->login);
			$this->tpl->assign("Compte",$m);
		}
		else
		{
			$this->site->ajouter_message('Vous devez être déconnecté.',ALERTE);
		}
	}
	public function action_mdp()
	{
		$this->set_title("Modification mot de passe");
		$f=new Form("?module=Compte&action=valide","form1");
			$f->add_password("pass1","pass1","Mot de passe actuel");
			$f->add_password("pass2","pass2","Nouveau mot de passe");
			$f->add_password("pass3","pass3","Ressaisir mot de passe");
		$this->tpl->assign("form",$f);	
	}
	public function action_valide()
	{
	
	}

	public function action_infoPaie ()
	{
		$this->set_title("Informations de paiements");
	}
	
	public function action_biblio ()
	{
		$this->set_title("Ma Bibliothèque");
	}
}
?>