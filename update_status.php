<?php
include('DBfunctions.php');
$conn = DBconnect();

if (isset($_GET['order_id']) && isset($_GET['status'])) {
    $orderID = $_GET['order_id'];
    $newStatus = $_GET['status'];

    $sql = "UPDATE statement SET status = '$newStatus' WHERE id = '$orderID'";
    if ($conn->query($sql) === TRUE) {
        echo "Status updated successfully.";
    } else {
        echo "Error updating status: " . $conn->error;
    }
}
