<?php

abstract class database {

    public static $link ="";

	protected static function createConnexion(){
		if(empty(self::$link)){
			self::$link = new pdo("mysql:host=".DBHOST.";dbname=".DBNAME.";charset=UTF8", DBUSER, DBPWD);
		}
        return self::$link;
	}

    static function authUser($id,$psw){
        $bdd = self::createConnexion();
        $sql = "Select * FROM User Where identifiant = :id AND mdp = :psw";
        $req = self::$link->prepare($sql);
		$req->bindvalue(":id", $id);
		$req->bindvalue(":psw", $psw);
        $req->execute();
		return $req->fetch();
    }

    static function createUser($data){
        
        if(!empty($data['identifiant']) and !empty($data['pseudo']) and !empty($data['mdp']) ){
            $bdd = self::createConnexion();
            $sql = "INSERT INTO `user` (`id`, `grade`, `identifiant`, `mdp`, `mail`, `ip`, `identifier`, `pseudo`) VALUES (NULL, 'user', :id, :mdp, '', '', NULL, :pseudo); ";
            $req = $bdd->prepare($sql);
            $req->bindvalue(":id", $data['identifiant']);
            $req->bindvalue(":mdp", $data['mdp']);
            $req->bindvalue(":pseudo", $data['pseudo']);
            $req->execute();  
            
            return $req;
        }
    }

    static function removeUser($id){
        $bdd = self::createConnexion();
        $sql = "DELETE FROM `user` WHERE `user`.`id` = :id";
        $req = $bdd->prepare($sql);
        $req->bindvalue(":id", $id);
        $req->execute();
    }


    

    

}