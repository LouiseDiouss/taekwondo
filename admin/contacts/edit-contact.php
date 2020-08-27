<?php
    require_once '../../proccess/config.php';
    require_once '../../proccess/mailer.php';

    $host = $_SERVER['SERVER_NAME'].':'. $_SERVER['SERVER_PORT'];

    if (!empty(isset($_GET['contact'])))
    {
        $slug = $_GET['contact'];

        $str = 'SELECT idContact, slug, nom, prenom, email, objet, message, reponse, dateReponse
                FROM contact WHERE slug = ?';
        $request = $dataBase->prepare($str);
        $request->execute([$slug]);

        $contact = $request->fetch();
    }

    if(isset($_POST['edit-contact']))
    {
        $reponse = htmlspecialchars($_POST['reponse']);
       
        
        date_default_timezone_set('Europe/Paris');  
        
        $dateReponse = date('Y-m-d H:i:s'); 

        if(!empty($reponse)){
            $str = 'UPDATE contact SET reponse = ?, dateReponse= ? 
                    WHERE slug = ? AND idContact=?';
            $request = $dataBase->prepare($str);
            $res = $request->execute(array($reponse, $dateReponse, $contact['slug'], $contact['idContact']));

            if ($res){
                     /* Envoi du mail */
                       
                       
                        sendMail($contact['email'], $contact['objet'], $reponse, $reponse);
                     /* Envoi de mail */
                $msg = ['success' => 'contact modifiée avec succès.'];

                header('location:list-contact.php');


              /*echo '<script type="text/javascript">
                        alert("Votre reponse  N° '.$contact['slug'].' a bien ete envoye");
                    </script>';

              echo '<SCRIPT LANGUAGE="JavaScript">
                            document.location.href="list-contact.php"
                    </SCRIPT>';*/
            }else{
                $msg = ['danger' => 'Une erreur s\'est produite.'];
            }
        }else{
            $msg = ['warning' => 'Veuillez renseigner tous les champs.'];
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Réponse à un contact</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <?php include '../../includes/css-links.html'?>
        <link rel="stylesheet" href="../../includes/style.css">

    </head>
    <body>
        <?php include '../../includes/menu.php'; ?>
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-md-2">
                    <a role="button" href="list-contact.php" class="btn btn-outline-primary" >
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="col-md-8">
                    <h2>Réponse à un Contact</h2>
                    <?php if (isset($msg)){?>
                        <p class="alert alert-<?=key($msg)?>">
                            <?=$msg[key($msg)]?>
                        </p>
                    <?php }?>
                    <form method="post">
                        <?php include '../includes/_form-reponse-contact.php';?>
                        <div class="form-group mt-3">
                            <button class="btn btn-warning" type="submit" name="edit-contact">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                Répondre
                            </button>
.                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
        <?php include '../../includes/footer.php'; ?>
        <?php include '../../includes/js-links.html'; ?>
    </body>
</html>

<?php //print $contact['slug'].'et id = '.$contact['idContact'];?>
<?php //print_r($contact['slug']);?>