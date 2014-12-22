<?php

	class VideoManager{
		
		public static function allvideo(){
			$sql = "SELECT * FROM video ORDER BY sortie DESC";
			$res=DB::get_instance()->prepare($sql);
			$res->execute();
			$i = 0;
			$allvideo = array();
			if($res->rowCount()==0){
				return false;
			}
			while($v = $res->fetch())
			{	
				$video = new video();
				$video->id = $v[0];
				$video->titre = $v[1];
				$video->sortie = $v[2];
				$video->video = $v[3];
				$video->ba = $v[4];
				$video->resume = $v[5];
				$video->prix = $v[6];
				$allvideo[$i] = $video;
				$i++;
			}
			return $allvideo;
		}
		
		public static function creer($v){
		
			$sql = "INSERT INTO video VALUES ('', ?, ?, ?, ?, ?, ?)";
			$res = DB::get_instance()->prepare($sql);
			$res -> execute(array($v->titre, $v->sortie, $v->video,$v->ba,$v->resume,$v->prix));
			$v-> id=DB::get_instance()->lastInsertId();
			return $m;
		}
		
		public static function top100(){
			
			$sql = "SELECT * FROM video ORDER BY sortie DESC TOP 100";
			$res=DB::get_instance()->prepare($sql);
			$res->execute();
			$i = 0;
			$allvideo = array();
			if($res->rowCount()==0){
				return false;
			}
			while($v = $res->fetch())
			{	
				$video = new video();
				$video->id = $v[0];
				$video->titre = $v[1];
				$video->sortie = $v[2];
				$video->video = $v[3];
				$video->ba = $v[4];
				$video->resume = $v[5];
				$video->prix = $v[6];
				$allvideo[$i] = $video;
				$i++;
			}
			return $allvideo;
		}
		
		public static function chercher_prix_inf($prix){
		
			$sql = "SELECT * FROM video WHERE prix =< ?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($prix));
			$i = 0;
			$allvideo = array();
			if($res->rowCount()==0){
				return false;
			}
			while($v = $res->fetch())
			{	
				$video = new video();
				$video->id = $v[0];
				$video->titre = $v[1];
				$video->sortie = $v[2];
				$video->video = $v[3];
				$video->ba = $v[4];
				$video->resume = $v[5];
				$video->prix = $v[6];
				$allvideo[$i] = $video;
				$i++;
			}
			return $allvideo;
		}
			
		public static function chercher_prix_sup($prix){
		
			$sql = "SELECT * FROM video WHERE prix >= ?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($prix));
			$i = 0;
			$allvideo = array();
			if($res->rowCount()==0){
				return false;
			}
			while($v = $res->fetch())
			{	
				$video = new video();
				$video->id = $v[0];
				$video->titre = $v[1];
				$video->sortie = $v[2];
				$video->video = $v[3];
				$video->ba = $v[4];
				$video->resume = $v[5];
				$video->prix = $v[6];
				$allvideo[$i] = $video;
				$i++;
			}
			return $allvideo;
		}
		
		public static function chercher_alph_dec(){
		
			$sql = "SELECT * FROM video ORDER BY titre DESC";
			$res=DB::get_instance()->prepare($sql);
			$res->execute();
			$i = 0;
			$allvideo = array();
			if($res->rowCount()==0){
				return false;
			}
			while($v = $res->fetch())
			{	
				$video = new video();
				$video->id = $v[0];
				$video->titre = $v[1];
				$video->sortie = $v[2];
				$video->video = $v[3];
				$video->ba = $v[4];
				$video->resume = $v[5];
				$video->prix = $v[6];
				$allvideo[$i] = $video;
				$i++;
			}
			return $allvideo;
		}
		
		public static function chercher_alph_asc(){
		
			$sql = "SELECT * FROM video ORDER BY titre ASC";
			$res=DB::get_instance()->prepare($sql);
			$res->execute();
			$i = 0;
			$allvideo = array();
			if($res->rowCount()==0){
				return false;
			}
			while($v = $res->fetch())
			{	
				$video = new video();
				$video->id = $v[0];
				$video->titre = $v[1];
				$video->sortie = $v[2];
				$video->video = $v[3];
				$video->ba = $v[4];
				$video->resume = $v[5];
				$video->prix = $v[6];
				$allvideo[$i] = $video;
				$i++;
			}
			return $allvideo;
		}
		
		public static function chercher_video($titre){
		
			$sql = "SELECT * FROM video WHERE MATCH (video.titre) AGAINST ? ORDER BY titre ASC";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($titre));
			$i = 0;
			$allvideo = array();
			if($res->rowCount()==0){
				return false;
			}
			while($v = $res->fetch())
			{	
				$video = new video();
				$video->id = $v[0];
				$video->titre = $v[1];
				$video->sortie = $v[2];
				$video->video = $v[3];
				$video->ba = $v[4];
				$video->resume = $v[5];
				$video->prix = $v[6];
				$allvideo[$i] = $video;
				$i++;
			}
			return $allvideo;
		}
		
		public static function supprime(){
			$id = $this->req->id;
			$sql = "DELETE FROM compte WHERE id= $id";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($titre));
			$this->site->ajouter_message('Video $id supprimé!');
			$this->site->redirect('index.php?module=Admin');
		}
		
	}
	
?>