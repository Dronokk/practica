<?php

// проверка на вход в профиль
if(!isset($_SESSION['session_Username']) !== 0){
    header('Location: intropage.php');
    exit();
} 
    header('Location: login.php');
?>
