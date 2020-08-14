<?php
/**
 * Created by PhpStorm.
 * User: sylvanus
 * Date: 14/08/20
 * Time: 15:34
 */
    session_start();
    $_SESSION = array();
    session_destroy();
    header("Location: /");
