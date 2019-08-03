<?php
	$p = isset($_GET['j']) ? $_GET['j']:"dashboard";
	switch ($p){
		case "dashboard" : include("./pages/main.php"); break ;
		case "connexion" : include("./modules/connexion/index.php"); break ;
		case "service" : include("./modules/service/index.php"); break ;
		case "activite" : include("./modules/activite/index.php"); break ;
		case "user" : include("./modules/user/index.php"); break ;
		case "groupe" : include("./modules/groupe/index.php"); break ;
		case "demande" : include("./modules/demande/index.php"); break ;
		case "contact" : include("./modules/contact/index.php"); break ;
		default : echo ("Page inexistante"); break ;
	}
?>