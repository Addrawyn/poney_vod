<?php
class Paiement{
		
		public $id
		public $num
		public $code
		public $date
		public $adr
		public $id_compte
		
		public function __construct($num=NULL, $code=NULL, $date=NULL, $adr=NULL, $id=NULL){
			$this->id = $id;			
			$this->num=$num;
			$this->code=$code;
			$this->dat=$date;
			$this->adr=$adr;
			$this->id_compte=$id_compte;
			
		}
		
		
		//éventuellement setters et getters
		
		
}
?>