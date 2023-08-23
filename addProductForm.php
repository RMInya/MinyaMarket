<?php
include_once 'DBfunctions.php';
$conn = DBconnect();

$status = $statusMsg = '';
if (isset($_POST["submit"])) {
    $status = 'error';
    if (!empty($_FILES["image"]["name"])) {
        $fileName = basename($_FILES["image"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        $productName = $_POST['productName'];
        $productCost = $_POST['productValue'];
        $productDesc = $_POST['productDesc'];

        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');

        if (in_array($fileType, $allowTypes)) {

            $image = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));

            $result = insertProduct($conn, $imgContent, $productName, $productDesc, $productCost);

            if ($result) {
                require "./pages/main.php";
            }
        }
    }
}
