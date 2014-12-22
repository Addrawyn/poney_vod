<?php

class CategorieManager{

	public static function recup_categorie(){
		$sql = "select * from categorie";
		$res = DB::get_instance()->prepare($sql);
		$res -> execute();
		$i=0;
		while ($m=$res->fetch())
		{
			$t[$i]=new Categorie($m[0],$m[1]);
			$i++;
		}
		return $t;
	}
}
?>