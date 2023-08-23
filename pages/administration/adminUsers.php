<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./pages/header.php"; ?>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>
    <?php
    include_once 'DBfunctions.php';

    $conn = DBconnect();
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>email</th>
                </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["userEmail"] . "</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No records found.";
    }

    $conn->close();
    ?>
</body>
<?php include "footer.php"; ?>

</html>