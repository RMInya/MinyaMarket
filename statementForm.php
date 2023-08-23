<?php
include_once 'DBfunctions.php';
$conn = DBconnect();

if ($_POST["name"] != 0 && $_POST["phone"] != 0 && $_POST["comment"] != 0) {
    $status = "new";
    insertStatement($conn, $_POST["name"], $_POST["phone"], $_POST["comment"], $status);
    require "./pages/thanksPage.php";
} else {
    echo "all fiellds should be ";
};

$conn->close();
