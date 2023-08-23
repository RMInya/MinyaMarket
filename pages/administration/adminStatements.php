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

        #statusChanges {
            padding: 10rem 0 0 0rem;
        }

        #view {
            padding: 1rem 0 0 0rem;
        }
    </style>
</head>

<body>
    <div id="view">
        <label for="status">Select Status:</label>
        <select name="status" id="status" onchange="filterOrders()">
            <option value="all">All</option>
            <option value="new">New</option>
            <option value="executing">Executing</option>
            <option value="completed">Completed</option>
        </select>

        <div id="orderResults"></div>

        <script>
            function filterOrders() {
                var selectedStatus = document.getElementById("status").value;

                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("orderResults").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "/search_orders.php?status=" + selectedStatus, true);
                xmlhttp.send();
            }
        </script>
    </div>
    <div id="statusChanges">

        <div class="renewstatus">
            <label for="order_id">Select Order id:</label>
            <input type="text" name="order_id" id="order_id">
        </div>

        <div>
            <label for="changeStatus">Select Status:</label>
            <select name="changeStatus" id="changeStatus">
                <option value="new">New</option>
                <option value="executing">Executing</option>
                <option value="completed">Completed</option>
            </select>
            <button onclick="updateStatus()">Update Status</button>
        </div>

        <div id="updateResult"></div>

        <script>
            function updateStatus() {
                var selectedOrder = document.getElementById("order_id").value;
                var selectedStatus = document.getElementById("changeStatus").value;

                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("updateResult").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "/update_status.php?order_id=" + selectedOrder + "&status=" + selectedStatus, true);
                xmlhttp.send();
            }
        </script>
    </div>
</body>
<?php include "footer.php"; ?>

</html>