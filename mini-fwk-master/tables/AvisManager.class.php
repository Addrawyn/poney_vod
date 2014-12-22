<?php
	
	class AvisManager{
		
		public static function creer($v){
		
			$sql = "INSERT INTO avis VALUES ('', ?, ?)";
			$res = DB::get_instance()->prepare($sql);
			$res -> execute(array($v->comm, $v->note));
			$v-> id=DB::get_instance()->lastInsertId();
			return $m;
		}