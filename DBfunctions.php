<?php

function DBconnect()
{
    $servername = "localhost";
    $username = "root";
    $password = "Rostyk00405!";
    $name = "minyamarket";

    $conn = new mysqli($servername, $username, $password, $name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function insertProduct($conn, $imgContent,  $productName, $productDesc, $productCost)
{

    $sql = "insert into products values (0, ?, ? , ? , ?, 1)";

    if ($conn->execute_query($sql, [$imgContent, $productName, $productDesc, $productCost]) === TRUE) {
        return TRUE;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function setIsActive($conn, $productName, $isActive)
{
    $sql = "UPDATE products SET isactive = $isActive where productName = ?";

    if ($conn->execute_query($sql, [$productName]) === TRUE) {
        echo "updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function insertStatement($conn, $userName, $phoneNumber, $commentary, $status)
{
    $sql = "insert into statement values (0, ? , ? , ?, ?)";

    if ($conn->execute_query($sql, [$userName, $phoneNumber, $commentary, $status]) === TRUE) {
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function insertUsers($conn, $userName, $password)
{
    $sql = "insert into users values (0, ?, ?)";

    if ($conn->execute_query($sql, [$userName, $password]) === TRUE) {
        return TRUE;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
