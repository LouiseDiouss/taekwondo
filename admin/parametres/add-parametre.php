<?php
    session_start();

    // Redige le visiteur qui n'a pas les droits d'accès...
    if ((isset($_SESSION['profil']) || !isset($_SESSION['profil'])) && strcmp($_SESSION['profil'], 'ROLE_ADMIN') != 0){
        header('location: /');
    }

    require_once '../../proccess/config.php';

    if (isset($_POST['param'])){
        $nom = htmlspecialchars($_POST['ets-nom']);
        $adress = htmlspecialchars($_POST['ets-adress']);
        $cp = htmlspecialchars($_POST['ets-cp']);
        $ville = htmlspecialchars($_POST['ets-ville']);
        $siege = htmlspecialchars($_POST['ets-siege']);
        $phone = htmlspecialchars($_POST['ets-tel']);
        $email = htmlspecialchars($_POST['ets-email']);
        $face = htmlspecialchars($_POST['ets-facebook']);
        $twitter = htmlspecialchars($_POST['ets-twitter']);
        $insta = htmlspecialchars($_POST['ets-instagram']);

        //echo $adress, $cp, $ville;die();

        if (!empty($nom) && !empty($adress) && !empty($cp) && !empty($ville) && !empty($siege)
        && !empty($phone) && !empty($email)){
            $insert = 'INSERT INTO parametres(ets_slug, ets_nom, ets_adresse, ets_code_postal, ets_ville, ets_telephone, 
                      ets_email, ets_siege_social, ets_est_active, ets_date_ajout_param, ets_facebook, ets_twitter, ets_instagram) 
                      VALUES(UUID(), ?, ?, ?, ?, ?, ?, ?, true, NOW(), ?, ?, ?)';

            $request = $dataBase->prepare($insert);

            $request->execute(array($nom, $adress, $cp, $ville, $phone, $email, $siege, $face, $twitter, $insta));

            $msg = ['success' => 'Paramètres définies avec succes.'];
        }else{
            $msg = ['warning' => 'Veuillez renseigner tous les champs obligatoires.'];
        }

    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Paramètres du site - Taekwondo Challenge</title>
    <?php include '../includes/css-admin.html';?>
    <link rel="shortcut icon" href="../../assets/media/images/logo.png">
</head>
<body>
    <?php include '../includes/menu-admin.php';?>
    <div class="container">
        <div class="row mt-3 mb-2">
            <div class="col-md-1">
                <a role="button" href="list-parametre.php" class="btn btn-outline-primary" >
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                </a>
            </div>
            <div class="col"><h2 class="text-center">Paramètres du site</h2></div>
        </div>
        <!--<h2 class="text-center mt-2"></h2>-->
        <?php if (isset($msg)){?>
            <p class="alert alert-<?=key($msg)?>">
                <?=$msg[key($msg)]?>
            </p>
        <?php }?>
        <div class="col-md-12">
            <form method="post">
            <?php include '../includes/_form-param.php';?>
            <div class="form-group mt-2">
                <input type="submit" class="btn btn-primary" value="Enregistrer les paramètres" name="param"/>
            </div>
            </form>
        </div>
    </div>

    <?php include '../includes/js-admin.html';?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("*").click(function () {
                $('#suggest-adress').html('');
            });

            $('#ets-adress').keyup(function (e) {
                var value = $('#ets-adress').val().replace(/ /g, '+');
                $.ajax({
                    url: 'https://api-adresse.data.gouv.fr/search/?q='+value+'&limit=15',
                    success: function(data){
                        $('#suggest-adress').html('');
                        data.features.forEach((item, index) => {
                            $('#suggest-adress')
                                .append('<li id="address-'+index+'" data-rue="'+item.properties.name+'" ' +
                                    'data-code="'+item.properties.postcode+'" data-ville="'+item.properties.city+'" ' +
                                    'class="list-group-item list-group-item-action">'+item.properties.label+'</li>')
                        });
                    }
                });
            });

            $('#suggest-adress').on('click', '.list-group-item', function() {
                $('#ets-adress').val( $(this).attr('data-rue') );
                $('#ets-cp').val( $(this).attr('data-code') );
                $('#ets-ville').val( $(this).attr('data-ville') );
                $('#suggest-adress').html('');
            });
        })
    </script>
</body>
</html>