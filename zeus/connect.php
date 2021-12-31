<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "joy";
$connect = mysqli_connect($host, $user, $password);
if (!$connect) {
    echo 'error';
} else {
    $gbaDatabase = mysqli_select_db($connect, $database);
    if (!$gbaDatabase) {
        echo 'error';
    } else {

        // echo "string";
    }
}
