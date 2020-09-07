<?php
    session_start();

    require_once 'proccess/config.php';

    $str = 'SELECT nom_user,prenom_user,sexe,dateNaissance, lieuNaissance, adresse_user, code_postal_user, ville_user,telephone_user,email_user,telResponsable, nationalite, numLicence, passeportSportif FROM user WHERE email_user="'.$_SESSION['email_user'].'" ';

    $request = $dataBase->query($str);
    $data = $request->fetch()


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Mon espace membre - Taekwondo Challenge</title>
    <?php include 'includes/css-links.html';?>
    <link rel="stylesheet" href="includes/styleMembre.css">
    <link rel="shortcut icon" href="assets/media/images/logo.png">
</head>
<body>

    <?php include 'includes/menuMembre.php';?>
    <section style="background-size:100%;color:black;text-transform: capitalize;position:relative;width:1116px;left:250px;padding:0px 5px 0px 0px;">

        <?php include 'includes/menu_site_Membre.php';?>
    	<div class="container" style="padding:0px 150px 0px 10px;"  ><!--"-->
            <div class="table-responsive-sm">
                <table class="table" style="margin-top:40px;margin-bottom: 100px;"> <!--padding: 0px 150px 0px 100px;-->
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col" colspan="" class="cours">MON DOSSIER </th>
               
                    </tr>
                        <tr>
                                <th>ETAT CIVIL </th>
                                
                         </tr>
                    </thead>
                    <tbody>
                        <!--?php while () { ?-->
                            <tr>
                                <td style="text-transform:capitalize;text-align:left;">
                                    <label style="width:220px;">Nom : </label><span style="font-weight: 500;"><?= $data['nom_user'] ?></span><br>
                                    <label style="width:220px;">Prénom : </label><span style="font-weight: 500;"><?= $data['prenom_user'] ?></span><br>
                                    <label style="width:220px;">Nationalité : </label><span style="font-weight: 500;"><?= $data['nationalite'] ?></span><br>
                                    <label style="width:220px;">Date et lieu de Naissance :  </label><span style="font-weight: 500;"><?= $data['dateNaissance'].' '.$data['lieuNaissance']?></span><br>
                                    <label style="width:220px;">Adresse : </label><span style="font-weight: 500;"><?= $data['adresse_user'].' '.$data['code_postal_user'].' '.$data['ville_user'] ?></span> <br>
                                    <label style="width:220px;">Sexe : </label><span style="font-weight: 500;"><?= $data['sexe'] ?></span>
                                    
                                </td>
                                
                            </tr>
                    </tbody>

                    <thead class="thead-dark">
                        
                        <tr style="text-transform:capitalize;text-align:left;size:25px;">
                                <th>COORDONNEES </th>
                                
                         </tr>
                    </thead>
                    <tbody>
                              <tr>
                                 <td style="text-transform:capitalize;text-align:left;">
                                    <label style="width:220px;"> email_user : </label><span style="font-weight: 500;"><?= $data['email_user'] ?></span><br>
                                    <label style="width:220px;">Télephone : </label><span style="font-weight: 500;"><?= $data['telephone_user']  ?></span><br>
                                    <label style="width:220px;">Téléphone Responsable : </label><span style="font-weight: 500;"><?= $data['telResponsable'] ?></span><br><br>
                                    <a id="btn-fblogin" href="includes/modifTel_email.php" class="btn btn-lg  btn-primary" style="background-color:transparent;color:#DF3F3F;font-weight: 500;border-color:#DF3F3F;margin-left: 390px; "><i class="fa fa-pencil-square-o" aria-hidden="true">modifier</i></a>
                                    <br>
                                 </td>
                            </tr>
                    </tbody>
                     <thead class="thead-dark">
                        
                        <tr>
                               <th>INFORMATIONS SPORTIVES </th>
                                
                         </tr>
                    </thead>
                    <tbody>
                              <tr>
                                <td style="text-transform:capitalize;text-align:left;">
                                    <label style="width:220px;">Licence Sportive : </label><span style="font-weight: 500;"><?= $data['numLicence'] ?></span><br>
                                    <label style="width:220px;">Passeport Sportif : </label><span style="font-weight: 500;"><?= $data['passeportSportif'] ?></span><br>
                                </td>
                            </tr>
                     </tr>
                        <!--?php } ?-->
                    </tbody>
                    </table>
                    
                </table>
            </div>
        </div>




        
    </section> 
</body>
</html>