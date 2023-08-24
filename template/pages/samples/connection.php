<?php
$userlocation = 'localhost';
$user = 'root';
$password = '';
$dbname = 'skydash';

$conn = new mysqli($userlocation, $user,$password,$dbname);
// $conn = new mysqli('localhost','root','','myloginsystem');
    if (!$conn) {
        echo 'Not Connent';
    }
?>