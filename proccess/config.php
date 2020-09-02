<?php
try {
	$mysqlOptions = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' );
	$dataBase = new PDO('mysql:host=localhost;dbname=taek', 'root', '', $mysqlOptions);
	$dataBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
	print_r('Une erreur rencontrée : ', $e->getMessage());
}

    $requestParameter = $dataBase->query('SELECT * FROM parametres WHERE ets_est_active = true');
    $appParameters = $requestParameter->fetch();

    $host = $_SERVER['SERVER_NAME'].':'. $_SERVER['SERVER_PORT'];
?>