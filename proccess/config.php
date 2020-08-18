<?php
try {
	$mysqlOptions = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' );
	$dataBase = new PDO('mysql:host=localhost;dbname=taek', 'phpmyadmin', 'root', $mysqlOptions);
	$dataBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
	print_r('Une erreur rencontrée : ', $e->getMessage());
}
?>