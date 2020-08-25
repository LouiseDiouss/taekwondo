<?php
    session_start();
    require_once '../../proccess/config.php';

    if (isset($_GET['parameter']) && !empty($_GET['parameter'])){
        $paramSlug = $_GET['parameter'];

        $select = 'SELECT * FROM parametres WHERE ets_slug = ?';

        $request = $dataBase->prepare($select);
        $request->execute(array($paramSlug));

        $parameter = $request->fetch();
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
</head>
<body>
    <?php include '../includes/menu-admin.php';?>
    <div class="container">
        <h2 class="text-center mt-3">Modification du paramètre</h2>
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