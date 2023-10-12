<?php

    // начало сессии
    session_start();

    // проверка на наличие логина в бд
    if(!isset($_SESSION["session_Username"])){
        header("location: login.php");
    }

?>