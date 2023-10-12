<?php

// подключение к БД
require("db.php");
$link = mysqli_connect("$host", "$user", "$pass")or die("cannot connect server ");
mysqli_select_db($link,"$db")or die("cannot select DB");
?>