<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "header.php"; ?>
    <style>
        #container {
            padding: 1rem;
        }
    </style>
</head>

<body>
    <div id="container">
        <?php
        include_once 'DBfunctions.php';

        $conn = DBconnect();

        $sql = "SELECT max(id) as id FROM statement";
        $result = $conn->query($sql);

        if ($result) {

            $row = $result->fetch_assoc();
            $id = $row['id'];
            echo '<h1>Thank You!</h1>';
            echo 'your order has id: ' . $row["id"];
        }
        ?>
    </div>
</body>

</html>