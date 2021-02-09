<?php 
	session_start();
	require_once '../model/articleModel.php';

	if(isset($_POST['valider'])){
		extract($_POST);
		$dateEnregistrement = date("Y-m-d H:m:s");
		
		$idMem = $_SESSION['user']['id'];

		if(valider($nom, $description, $dateEnregistrement, $idMem) > 0){
			header("location:/mesprojets/php ilci/ilciExamen/accueil");
		}else{
			header("location:/mesprojets/php ilci/ilciExamen/gestInscriptionErreur");
		}
	}

	if(isset($_GET['delete']))
	{
		$idS = $_GET['delete'];
		echo "$idS";
		deleteArticle($idS);
		header("location:/mesprojets/php ilci/ilciExamen/accueil");
	}