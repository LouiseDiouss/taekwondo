<?php
    session_start();
    require_once 'proccess/config.php';
    require_once 'proccess/generateReservationNumber.php';
    require_once 'proccess/mailer.php';

    /*if (!$_SESSION['profil']){
        header('Location: /');
    }*/

    if (isset($_GET['prestation']) && !is_null($_GET['prestation'])){
        $reserSlug = trim(htmlspecialchars($_GET['prestation']));

        $str = 'SELECT idCours, slug, nom, categorie, jour, TIME_FORMAT(debut, "%H:%i") as debut, TIME_FORMAT(fin, "%H:%i") as fin
                FROM prestation WHERE slug = ?';
        $request = $dataBase->prepare($str);
        $request->execute(array($reserSlug));


        $reservation = $request->fetch();
    }

    if(isset($_POST['reserver'])){
        $number = trim(htmlspecialchars($_POST['numero']));

        if (!empty($number)){
            $insert = 'INSERT INTO reserver(idCours, idUser, numResa, date_heure_resa)
                        VALUES (?,?,?,NOW())';
            $insertReq = $dataBase->prepare($insert);
            $res = $insertReq->execute(array($reservation['idCours'], $_SESSION['idUser'], $number));

            if ($res){
                /* Envoi du mail */
                $subject = 'Votre reservation';
                $contenu = "Votre reservation pour le ".$reservation['jour']." à ".$reservation['debut']." à bien été prise en compte";
                sendMail($_SESSION['email'], $subject, $contenu, $contenu);

                $msg = ['success' => 'Reservation effectuée avec succès. Vous recevrai un e-mail.'];
            }else{
                $msg = ['danger' => 'Une erreur s\'est produite.'];
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Reservation d'une prestation - Taekwondo Challenge</title>
    <?php include 'includes/css-links.html';?>
</head>
<body>
    <?php include 'includes/menu.php';?>
    <div class="container mt-3">
        <div class="row">
            <div class="row"><h2 class="text-center">Détails de votre reservation</h2></div>
            <br>
            <div class="row mt-5">
                <?php if (isset($msg)){?>
                    <p class="alert alert-<?=key($msg)?>">
                        <?=$msg[key($msg)]?>
                    </p>
                <?php }?>
                <form method="post">
                    <div class="form-group row">
                        <label for="numero" class="col-sm-6 col-form-label">Numéro de la reservation : </label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="numero" name="numero"
                                                       value="<?= reservationNumber(); ?>">
                        </div>
                    </div>
                    <!--<div class="row">
                        <div class="col-md-12">
                            <table>
                                <tr>
                                    <td style="padding-right: 140px;">Cours </td><td>: <?/*= ucfirst($reservation['nom']); */?></td>
                                </tr>
                            </table>
                            <p style="">Cours : <?/*= ucfirst($reservation['nom']); */?></p>
                            <p>Catégorie : <?/*= ucfirst($reservation['categorie']); */?></p>
                            <p>Jour : <?/*= ucfirst($reservation['jour']); */?></p>
                            <p>Heure : <?/*= $reservation['debut']; */?> à <?/*= $reservation['fin']; */?></p>
                        </div>
                    </div>-->
                    <div class="form-group row">
                        <label for="prestation" class="col-sm-6 col-form-label">Cours : </label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="prestation"
                                                       value="<?= ucfirst($reservation['nom']); ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cat" class="col-sm-6 col-form-label">Catgorie : </label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="cat"
                                                       value="<?= ucfirst($reservation['categorie']); ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jour" class="col-sm-6 col-form-label">Jour : </label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="jour"
                                                       value="<?= ucfirst($reservation['jour']); ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="heure" class="col-sm-6 col-form-label">Heure : </label>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col">
                                    <input type="text" readonly class="form-control-plaintext" id="heure"
                                                         value="<?= $reservation['debut']; ?>">
                                </div>
                                <div class="col">
                                    <input type="text" readonly class="form-control-plaintext" id="heure"
                                                         value="<?= $reservation['fin']; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit" name="reserver">Reserver</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php';?>
    <?php include 'includes/js-links.html';?>
</body>
</html>