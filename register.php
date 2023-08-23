<?php
include('DBfunctions.php');
$conn = DBconnect();
$username = $_POST['user'];
$password = $_POST['pass'];

$result = insertUsers($conn, $username, $password);

if ($result) {
    require "./pages/loginPage.php";
}
