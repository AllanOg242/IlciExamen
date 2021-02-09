<?php 
session_start();
	require_once '../model/membreModel.php';

	if(isset($_POST['inscription'])){
		
		htmlspecialchars(extract($_POST));//pour les failles xss
		$dateEnregistrement = date("Y-m-d H:m:s");

		if(inscription($nom, $prenom, $email, $mdp, $civilite, $dateEnregistrement, $statut) > 0){
			header("location:/mesprojets/php ilci/ilciExamen/accueil");
		}else{
			header("location:/mesprojets/php ilci/ilciExamen/gestInscriptionErreur");
		}
	}

	if(isset($_POST['email']) && isset($_POST['mdp'])){
		$email = htmlspecialchars($_POST['email']);// eviter les injections XSS
		$mdp = htmlspecialchars($_POST['mdp']);

		$user = connexion($email, $mdp);
		//$verif = $db->prepare('SELECT email, mdp FROM membre WHERE email = ?');
		if($user != null)
		{
			var_dump($user);
			$_SESSION['user'] = $user[0];
			header('location:/mesprojets/php ilci/ilciExamen/accueil');
		}
		else
		{
			header('location:/mesprojets/php ilci/ilciExamen/index.php');
		}
		
	}

	if (isset($_GET['deconnexion'])) {
		session_unset();
		$_SESSION = array();
		header('location:index.php');
	}

	if(isset($_GET['delete']))
	{
		$idS = $_GET['delete'];
		echo "$idS";
		deleteMembre($idS);
		header("location:/mesprojets/php ilci/ilciExamen/accueil");
	}