<?php
// Classe de Gestion de la db ( connexion et requetes )

class user extends database{
    private $id = NULL;
    private $grade = "User";
    private $identifiant = "";
    private $mdp = "";
    private $mail = "";
    private $pseudo = "";

    
	function Build($Identifiant,$Mdp,$Pseudo="Noob",$Mail="none",$Grade="User"){
        $obj = new static;
        $obj->identifiant=$Identifiant;
        $obj->mdp=$Mdp;
        $obj->pseudo=$Pseudo;

        return $obj;
	}

    public static function check($data){
        $error=[];
        if (empty($data['pseudo'])){
            $error['pseudo'] = "Pseudo obligatoire pour l'inscription";
        }else{
            if(strlen($data['pseudo']) < 5){
                $error['pseudo'] = "Pseudo trop court ! (6 caracteres minimum)";
            }
        }

        if (empty($data['identifiant'])){
            $error['identifiant'] = "Identifiant obligatoire pour l'inscription";
        }else{
            if(strlen($data['identifiant']) < 5){
                $error['identifiant'] = "Identifiant trop court ! (5 caracteres minimum)";
            }
        }

        if (empty($data['mdp'])){
            $error['mdp'] = "Mot de passe obligatoire pour l'inscription";
        }else{
            if(strlen($data['mdp']) < 5){
                $error['mdp'] = "Mot de passe trop court ! (5 caracteres minimum)";
            }
        }
        
        
        if (empty($data['mdp2'])){
            $error['mdp2'] = "Vérification du mot de passe obligatoire pour l'inscription";
        }else{
            if($data['mdp2']!=$data['mdp']){
                $error['mdp2'] = "Vérification de mot de passe incorrect ";
            }
        }
      
        return $error;
    }

    public static function getAll(){
        $db=database::createConnexion();
        $sql = "Select * FROM User Where 1";
        $req = $db->prepare($sql);
        $req->execute();
		return $req->fetchAll(PDO::FETCH_CLASS);
    }

    public function remove(){
        
        $db=database::createConnexion();
        $sql = "DELETE FROM `user` WHERE `user`.`id` =:id;";
        $req = $db->prepare($sql);
        $req->bindvalue(":id", $this->id);
        $req->execute();
    }

    static function editUser($id,$pseudo,$mail){
        $db=database::createConnexion();
        $sql ="UPDATE `user` SET `mail` = :mail, `pseudo` = :pseudo WHERE `user`.`id` = :id;";
        
        //$sql ="UPDATE `user` SET `mail` = '$mail', `pseudo` = '$pseudo' WHERE `user`.`id` = '$id';";
        $req = $db->prepare($sql);
        $req->bindvalue(":mail", $mail);
        $req->bindvalue(":pseudo", $pseudo);
        $req->bindvalue(":id", $id);
        $req->execute();
        return $req;
    }

    
}