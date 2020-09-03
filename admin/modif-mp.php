<?php 
	require '../proccess/config.php';
	require_once '../proccess/mailer.php';

	$host = $_SERVER['SERVER_NAME'].':'. $_SERVER['SERVER_PORT'];

	if (isset($_POST['demandeInscription'])){
	   
        $password = htmlspecialchars($_POST['password']);
       

        if (!empty($password) && !empty($confPass) && !empty($licence) && !empty($passSport)){
            if (strcmp($password, $confPass) == 0){
                if (filter_var($email, FILTER_VALIDATE_EMAIL)){  

                    $token = sha1($email).sha1($tel);
                    $hashPwd = password_hash($password, PASSWORD_BCRYPT);

                    $insert = 'INSERT INTO user(slug, email, password, nationalite, nom, prenom, sexe, dateNaissance, 
                                lieuNaissance, adresse, codePostal, ville, telephone, telResponsable, numLicence, 
                                passeportSportif, profil, active, token_de_confirmation, date_ajout)
                                VALUES(UUID(),?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,true,?,NOW())';

                    $request = $dataBase->prepare($insert);

                    $result = $request->execute(array($email, $hashPwd, $nationalite, $nom, $prenom, $sexe, $birthday,
                        $lieuNaiss, $adress, $codePostal, $ville, $tel, $telRespo, $licence,
                        $passSport, 'ROLE_MEMBRE', $token));

                    if ($result){
                        /* Envoi du mail */
                        $subject = 'Confirmation de creation de compte';
                        $content = "Veuillez valider la création de 
                                    votre compte en cliquant sur <a href='http://".$host."/confirm-inscription.php?token=".$token."'>Activer</a>";
                        ;
                        sendMail($email, $subject, $content, $content);
                        /* Envoi de mail */

                        $msg = ['success' => 'Inscription réussie. Un courriel pour a été envoyé.'];
                    }
                }else{
                    $msg = ['warning' => "E-mail non valide."];
                }
            }else{
                $msg = ['danger' => "Les mots de passe ne sont pas indentique."];
            }
        }else{
            $msg = ['danger' => "Veuillez renseigner tous les champs."];
        }
    }
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Devenir membre - Taekwondo Challenge</title>
	<?php include '../includes/css-links.html';?>
    <link rel="stylesheet" href="../includes/style.css">
    <link rel="shortcut icon" href="../assets/media/images/logo.png">
	<!--?php include 'includes/style.css';?-->
</head>
<body>
	<?php include 'includes/menu-admin.php';?>

	<!-- formulaire d'inscription style="margin:50px 100px 100px 100px;"-->
		<div class="container" >
            <?php if (isset($msg)){?>
                <p class="alert alert-<?=key($msg)?>">
                    <?=$msg[key($msg)]?>
                </p>
            <?php }?>
			<?php include 'includes/_form-password.php'; ?>
		</div>

	<!-- formulaire d'inscription -->
	<!-- Pieds de page -->
	<?php include '../includes/footer.php'; ?>

	<?php include '../includes/js-links.html';?>
</body>
</html>