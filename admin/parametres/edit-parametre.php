<?php
    session_start();

    // Redige le visiteur qui n'a pas les droits d'accès...
    if ((isset($_SESSION['profil']) || !isset($_SESSION['profil'])) && strcmp($_SESSION['profil'], 'ROLE_ADMIN') != 0){
        header('location: /');
    }

    require_once '../../proccess/config.php';

    if (isset($_GET['parameter']) && !empty($_GET['parameter'])){
        $paramSlug = $_GET['parameter'];

        $select = 'SELECT * FROM parametres WHERE ets_slug = ?';

        $request = $dataBase->prepare($select);
        $request->execute(array($paramSlug));

        $parameter = $request->fetch();
    }

    // Traitement de la modification:
    // La modification consiste à désactiver le paramètre précédemment actif et d'en créer de nouveaux
    if (isset($_POST['edit-param'])){
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

        if (!empty($nom) && !empty($adress) && !empty($cp) && !empty($ville) && !empty($siege)
            && !empty($phone) && !empty($email)){
            $insert = 'INSERT INTO parametres(ets_slug, ets_nom, ets_adresse, ets_code_postal, ets_ville, ets_telephone, 
                      ets_email, ets_siege_social, ets_est_active, ets_date_ajout_param, ets_facebook, ets_twitter, ets_instagram) 
                      VALUES(UUID(), ?, ?, ?, ?, ?, ?, ?, true, NOW(), ?, ?, ?)';

            $request = $dataBase->prepare($insert);
            // Créé un nouvel enregistrement en BD
            $result = $request->execute(array($nom, $adress, $cp, $ville, $phone, $email, $siege, $face, $twitter, $insta));

            if ($result){
                $updateStr = 'UPDATE parametres SET ets_est_active = false WHERE ets_slug = ?';
                // Met à jour le paramètre précédent qui était actif
                $update = $dataBase->prepare($updateStr)->execute(array($paramSlug));
                $msg = ['success' => 'Paramètres modifié avec succes.'];

                header('Location: parametres/list-parametre.php');
            }

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
    <title>Modifier un paramètre - Taekwondo Challenge</title>
    <?php include '../includes/css-admin.html';?>
    <link rel="stylesheet" href="../../includes/style.css">
    <link rel="shortcut icon" href="../../assets/media/images/logo.png">
</head>
<body>
    <?php include '../includes/menu-admin.php';?>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-1">
                <a role="button" href="list-parametre.php" class="btn btn-outline-primary" >
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                </a>
            </div>
            <div class="col"><h2 class="text-center">Modification du paramètre</h2></div>
        </div>

        <?php if (isset($msg)){?>
            <p class="alert alert-<?=key($msg)?>">
                <?=$msg[key($msg)]?>
            </p>
        <?php }?>
        <div class="row justify-content-md-center mt-2">
            <form method="post">
                <?php include '../includes/_form-param.php'; ?>
                <div class="form-group mt-2 text-center">
                    <input type="submit" class="btn btn-warning" value="Enregistrer le paramètre" name="edit-param"/>
                </div>
            </form>
        </div>
    </div>
    <?php include '../../includes/footer.php';?>
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