<?php
session_start();
require 'fonctions.php';

$db = get_connection();



if(isset($_POST['loginForm']))

{
	#$_SESSION['connect']=0; //Initialise la variable 'connect'.
    $connexion  = get_connection();
    $user       = $_POST['email'];
    $pwd = $_POST['password'];

    if(!empty($user) && !empty($pwd)){
	    $requete = $db->prepare('SELECT * FROM user WHERE email = ? and password = ?');

	    $requete->execute(array($user, sha1($pwd)));
		$result = $requete->fetch();
	   		
	     if ($nb == 1 ) {
	     			
		     	    

			     	if ($result['profil'] == "admin") {
			     		/*$_SESSION['login']  = $_POST['username'];
				        $_SESSION['connect']=1;*/
				        //var_dump(expression)
				        $_SESSION['username'] = $result['login'];
			     		$_SESSION['profil'] = $result['profil'];
				     	header('location:page_admin.php?admin&page=getInscription');
			     	}else{
			     		/*$_SESSION['login']= $_POST['username'];
				        $_SESSION['connect']=1;*/
				        $_SESSION['username'] = $result['login'];
			     		$_SESSION['profil'] = $result['profil'];
				     	header('location:page_membre.php?membre&page=getpagemembre');
			     	}
			     
			     //$_SESSION

	     	}else{

	     	header('location:login.php?erreur=erreur');

	     	}
     }
  
}




?>