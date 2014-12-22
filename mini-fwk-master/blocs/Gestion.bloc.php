<?php
class Gestion extends Bloc{

	public function display(){
		if($this->session->ouverte())
			$this->tpl->assign('login',$this->session->user->login);
			$this->tpl->assign('admin',$this->session->user->admin);
	}
}
?>