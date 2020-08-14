<?php
/**
 * Created by PhpStorm.
 * User: sylvanus
 * Date: 14/08/20
 * Time: 01:44
 */
require_once 'config.php';

if (isset($_GET['token']) && !empty($_GET['token'])){
    $token = htmlspecialchars($_GET['token']);

    $select = 'SELECT EXISTS(SELECT * FROM user WHERE token_de_confirmation = ? AND active = false) AS tokenExists';
    $request = $dataBase->prepare($select);
    $request->execute(array($token));
    $result = $request->fetch();
    //var_dump($result);die();
    if ($result['tokenExists'] == 1){
        $update = $dataBase->prepare('UPDATE user SET active = true, date_confirmation = NOW() WHERE token_de_confirmation = ?');
        $update->execute(array($token));


        if ($update){
            header('Location: /');
        }
    }
}