<?php
    require_once '../../proccess/config.php';

    /*var_dump(uniqid('prest-', true));
    var_dump(UUID::v4());*/

    if (isset($_POST['add-prest'])){
        $prest = htmlspecialchars($_POST['nom-prestation']);
        $categorie = htmlspecialchars($_POST['categorie']);
        $jour = htmlspecialchars($_POST['jour']);
        $debut = htmlspecialchars($_POST['debut']);
        $fin = htmlspecialchars($_POST['fin']);

        if(!empty($prest) and !empty($categorie) and !empty($jour) and !empty($debut) and !empty($fin)){
            $str = 'INSERT INTO prestation(slug, nom, categorie, jour, debut, fin, active, date_creation) 
                    VALUES (UUID(),?,?,?,?,?,?,NOW())';
            $request = $dataBase->prepare($str);
            $res = $request->execute(array($prest, $categorie, $jour, $debut, $fin, true));

            if ($res){
                $msg = ['success' => 'Prestation créée avec succès.'];
            }else{
                $msg = ['danger' => 'Une erreur s\'est produite.'];
            }
        }else{
            $msg = ['warning' => 'Veuillez renseigner tous les champs.'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajouter une prestation</title>
    <?php include '../../includes/css-links.html'; ?>
     <link rel="stylesheet" href="../../includes/style.css">
</head>
<body>
    <?php include '../includes/menu-admin.php'; ?>
    <?php //include ROOT.'/includes/menu.php'; ?>
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2 col-xl-2">
                <a role="button" href="list-prestation.php" class="btn btn-outline-primary" >
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                </a>
            </div>
            <div class="col-sm-8 col-xs-8 col-md-8 col-lg-8 col-xl-8">
                <h2>Création d'une prestation</h2>
                <?php if (isset($msg)){?>
                <p class="alert alert-<?=key($msg)?>">
                    <?=$msg[key($msg)]?>
                </p>
                <?php }?>
                <form method="post">
                    <?php include '../includes/_form-prestation.php';?>
                    <div class="form-group mt-3">
                        <button class="btn btn-success" type="submit" name="add-prest">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            Créer la prestation
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2 col-xl-2"></div>
        </div>
    </div>
    <?php include '../../includes/footer.php'; ?>
    <?php include '../../includes/js-links.html'; ?>

</body>
</html>