<?php
//deklarasi
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'levelheaded.original');

//parameter
$connection = mysqli_connect(HOST, USER, PASS, DB);
//if ($connection) {
//    echo ("Connection has been successfully");
//} else {
//    die('Unable Connection');
//}
header('Content-Type: application/json');
