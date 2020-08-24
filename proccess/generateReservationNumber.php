<?php
/**
 * Created by PhpStorm.
 * User: sylvanus
 * Date: 13/08/20
 * Time: 12:20
 */

function reservationNumber(){
    $chaine = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $len = 6;
    $code = '';
    $max = mb_strlen($chaine, '8bit') - 1;
    for ($i = 0; $i < $len; $i++){
        $code .= $chaine[random_int(0, $max)];
    }

    return $code;
}