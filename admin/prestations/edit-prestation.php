<?php
    require_once '../../proccess/config.php';

    if (!empty(isset($_GET['prestation']))){
        $slug = $_GET['prestation'];

        $str = 'SELECT idCours, slug, nom, categorie, jour, TIME_FORMAT(debut, "%H:%i") as debut, TIME_FORMAT(fin, "%H:%i") as fin 
                FROM prestation WHERE slug = ?';
        $request = $dataBase->prepare($str);
        $request->execute([$slug]);

        $prestation = $request->fetch();
    }

    if(isset($_POST['edit-prest'])){
        $prest = htmlspecialchars($_POST['nom-prestation']);
        $cat = htmlspecialchars($_POST['categorie']);
        $jour = htmlspecialchars($_POST['jour']);
        $deb = htmlspecialchars($_POST['debut']);
        $end = htmlspecialchars($_POST['fin']);


        if(!empty($prest) and !empty($cat) and !empty($jour) and !empty($deb) and !empty($end)){
            $str = 'UPDATE prestation SET nom = ?, categorie = ?, jour = ?, debut = ?, fin = ?, modifie_le = NOW() 
                    WHERE slug = ? AND idCours = ?';
            $request = $dataBase->prepare($str);
            $res = $request->execute(array($prest, $cat, $jour, $deb, $end, $prestation['slug'], $prestation['idCours']));

            if ($res){
                $msg = ['success' => 'Prestation modifiée avec succès.'];
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
        <title>Modifier une prestation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <?php include '../../includes/css-links.html'?>
        <link rel="stylesheet" href="../../includes/style.css">
    </head>
    <body>
        <?php include '../includes/menu-admin.php'; ?>
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-md-2">
                    <a role="button" href="list-prestation.php" class="btn btn-outline-primary" >
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="col-md-8">
                    <h2>Modification d'une prestation</h2>
                    <?php if (isset($msg)){?>
                        <p class="alert alert-<?=key($msg)?>">
                            <?=$msg[key($msg)]?>
                        </p>
                    <?php }?>
                    <form method="post">
                        <?php include '../includes/_form-prestation.php';?>
                        <div class="form-group mt-3">
                            <button class="btn btn-warning" type="submit" name="edit-prest">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                Modifier la prestation
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