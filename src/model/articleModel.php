<?php

    require_once 'bd.php';

    function valider($nom, $description, $dateEnregistrement, $idMembre){
    	$lastId = lastInsertIdForTable("article");

    	$insert = 'INSERT INTO article VALUES ("'.$lastId.'","'.$idMembre.'","'.$nom.'","'.$description.'","'.$dateEnregistrement.'" )';
    	global $bd;
    	$bd-> exec($insert);
        //die();
        return $bd -> lastInsertId();
    }

    function getAllArticle(){
        $sql = "SELECT * FROM article";
        global $bd;
        return $bd -> query($sql) -> fetchall();
    }

    function deleteArticle($id){
        $sql = "DELETE FROM article WHERE id = $id ";
        global $bd;
        return $bd -> exec($sql);
    }