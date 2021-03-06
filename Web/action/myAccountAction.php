<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/Connection.php");
	require_once("action/DAO/ResponseDAO.php");

	class MyAccountAction extends CommonAction {
		public $wrongLogin = false;
		public $connection = [];
		public $errorMessage = "";
		public $resultat;
		
		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {
			$this->wrongLogin = false;

			if($_SESSION['userCookie']){
				//Aller chercher les infos de l'user
				$this->resultat = "allo";
			}else{
				header("location:noAccount.php");
			}
			
			//Si l'usagé n'est pas connecté, rediriger vers noAccount
			// $this->wrongLogin = false;
			
			// if (isset($_POST["username"])) {
			// 	$connection = Connection::getConnection($_POST["username"], $_POST["pwd"]);
				
			// 	if($connection == null){
			// 		$errorMessage = "Username ou mot de passe invalide";
			// 		header("location:index.php");
			// 		$this->wrongLogin = true;
			// 		exit;
			// 	}else{
			// 		$_SESSION["username"] = $_POST["username"];
			// 		$_SESSION["pwd"] = $_POST["pwd"];
			// 		$_SESSION["visibility"] = CommonAction::$VISIBILITY_MEMBER;
			// 		header("location:editor.php");
			// 		exit;
			// 	}
			// }
		}
	}
	

