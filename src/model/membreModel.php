<?php

    require_once 'bd.php';

    function inscription($nom, $prenom, $email, $mdp, $civilite, $dateEnregistrement, $statut){
    	$lastId = lastInsertIdForTable("membre");
    	$insert = 'INSERT INTO membre VALUES ("'.$lastId.'","'.$nom.'","'.$prenom.'","'.$email.'","'.$mdp.'","'.$civilite.'","'.$dateEnregistrement.'","'.$statut.'" )';
        //$insert = addslashes($insert);//pour les injections sql
        echo "$insert";
        //die();
    	global $bd;
    	return $bd-> exec($insert);
    }


	function getAllMembres()
	{
		$sql = "SELECT * FROM membre";
		global $bd;
		return $bd -> query($sql) -> fetchall();
	}

    function deleteMembre($id){
        $sql = "DELETE FROM membre WHERE id = $id ";
        global $bd;
        return $bd -> exec($sql);
    }


    function connexion($email, $mdp){
        $user = executerRequete("SELECT * FROM membre WHERE email = :email AND mdp = :mdp", array('email' => $email , 'mdp' => $mdp));
        return $user;
    }

    