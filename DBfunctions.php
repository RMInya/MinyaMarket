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

// function createTable($conn)
// {
// $sql = "CREATE TABLE products (
//         id INT(6) AUTO_INCREMENT PRIMARY KEY,
//         productName VARCHAR(30) NOT NULL,
//         description VARCHAR(30) NOT NULL,
//         value DECIMAL(4,2),
//         isactive TINYINT
//         )";
// create table statement (
//     id INT(6) AUTO_INCREMENT PRIMARY KEY,
//     userName VARCHAR(30) NOT NULL,
//     userNumber VARCHAR(30) NOT NULL,
//     commentary VARCHAR(100) NOT NULL
//     )
//     if ($conn->query($sql) === TRUE) {
//         echo "Table created successfully";
//     } else {
//         echo "Error creating table: " . $conn->error;
//     }
// }

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
