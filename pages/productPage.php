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

        $element_id = $_GET['id'];

        $sql = "SELECT * FROM products WHERE id = $element_id";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();

            echo '<h2>' . ' Product:   ' . $row['productName'] . '</h2>';
            echo '<p>' . ' Description:   ' . $row['description'] . '</p>';
            echo '<p>' . ' Cost:   ' . $row['value'] . '</p>';
        } else {
            require "404.php";
        }

        $conn->close();
        ?>
        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" />
    </div>
</body>
<?php include "footer.php"; ?>


</html>