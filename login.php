<?php
include('DBfunctions.php');
$conn = DBconnect();
$userEmail = $_POST['user'];
$password = $_POST['pass'];

session_start();
$_SESSION['userEmail'] = $userEmail;


$userEmail = stripcslashes($userEmail);
$password = stripcslashes($password);
$userEmail = mysqli_real_escape_string($conn, $userEmail);
$password = mysqli_real_escape_string($conn, $password);

$sql = "select * from users where userEmail = '$userEmail' and userPassword = '$password'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$iscount = mysqli_num_rows($result);
if ($iscount == 1) {
    require "./pages/main.php";
} else {
    require "./pages/loginPage.php";
}
