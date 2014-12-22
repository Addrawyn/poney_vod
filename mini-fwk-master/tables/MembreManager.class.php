<?php
//exemple de table Membre
/*
//structure SQL : 
CREATE TABLE `Membres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `pass` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
*/



//classe de gestion des entités Membre
class MembreManager{
	

		public static function creer($m){
			
			$sql = "INSERT INTO compte VALUES ('',?, ?, ?, 0)";
			$res = DB::get_instance()->prepare($sql);
			$res -> execute(array($m->login,$m->pass,$m->mail));
			$m->id=DB::get_instance()->lastInsertId();
			return $m;
			
		}


		public static function chercherParID($id){
			$sql="SELECT * from compte WHERE id=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($id));
			//gérer les erreurs éventuelles
			if($res->rowCount()==0){
				return false;
			}
			$m= $res->fetch();			
			$membre=new Membre();
			$membre->id=$m[0];
			$membre->login=$m[1];
			$membre->mail=$m[3];
			$membre->pass=$m[2];
			$membre->admin=$m[4];
			return $membre;
		}



		public static function chercherParLogin($login){
			$sql="SELECT * from compte WHERE login=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($login));
			//gérer les erreurs éventuelles
			if($res->rowCount()==0){
				return false;
			}
			$m= $res->fetch();			
			$membre=new Membre();
			$membre->id=$m[0];
			$membre->login=$m[1];
			$membre->mail=$m[3];
			$membre->pass=$m[2];
			$membre->admin=$m[4];
			return $membre;
		}
		
		public static function chercherParMail($mail){
			$sql="SELECT * from compte WHERE login=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($mail));
			//gérer les erreurs éventuelles
			if($res->rowCount()==0){
				return false;
			}
			$m= $res->fetch();			
			$membre=new Membre();
			$membre->id=$m[0];
			$membre->login=$m[1];
			$membre->mail=$m[3];
			$membre->pass=$m[2];
			$membre->admin=$m[4];			
			return $membre;
		}
		
		
		//autres exemples de fonctions possibles
		public static function liste(){
			
		}   		

		public static function desactiver(){
			
		}
		public static function activer(){
			
		}
}

?>