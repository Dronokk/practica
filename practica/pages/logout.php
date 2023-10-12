<?php

// выход пользователя из системы
session_start();
session_destroy();
header("Location: ../index.php");
?>