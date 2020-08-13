<?php

try
{
    $mysql_options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' );
    $dataBase = new PDO('mysql:host=localhost;port=3308;dbname=taek', 'phpmyadmin', 'root', $mysql_options);
    $dataBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch (Exception $e)
{
    print_r('Erreur : ' . $e->getMessage());
}
?>