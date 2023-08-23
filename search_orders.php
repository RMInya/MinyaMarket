<?php
include('DBfunctions.php');
$conn = DBconnect();

if (isset($_GET['status'])) {
    $statusToFilter = $_GET['status'];
    if ($statusToFilter == "all") {
        $sql = "SELECT * FROM statement";
    } else {
        $sql = "SELECT * FROM statement WHERE status = '$statusToFilter'";
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>name</th>
                    <th>phone</th>
                    <th>commentary</th>
                    <th>status</th>
                </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["userName"] . "</td>
                    <td>" . $row["userNumber"] . "</td>
                    <td>" . $row["commentary"] . "</td>
                    <td>" . $row["status"] . "</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No orders found with status: $statusToFilter";
    }
}
