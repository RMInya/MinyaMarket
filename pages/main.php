<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "header.php"; ?>
    <style>
        body {
            color: black;
            text-align: center;
            min-height: 100vh;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        #mainp a {
            justify-content: space-between;
            color: black;
        }

        #mainp h4 {
            justify-content: space-between;
            color: black;
            display: ruby;
        }

        .card {
            justify-content: space-between;
            color: black;
            display: ruby;
        }
    </style>
</head>

<body>
    <div id="mainp">

        <?php
        include_once 'functions.php';
        include_once 'DBfunctions.php';

        $conn = DBconnect();

        if (isset($_GET['paging'])) {
            $paging = $_GET['paging'];
        } else {
            $paging = 1;
        }

        $no_of_records_per_page = 20;

        $offset = ($paging - 1) * $no_of_records_per_page;

        $total_pages_sql = "SELECT COUNT(*) FROM products WHERE isactive = 1";

        $result = mysqli_query($conn, $total_pages_sql);

        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM products WHERE isactive = 1 LIMIT $offset , $no_of_records_per_page ";
        $res_data = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_array($res_data)) {
            echo '<div class="card">
            <h4>
            <a href="products?id=' . $row['id'] . '">' . $row['productName'] . '</a>
            ' . ' <br> ' . $row["value"] . '
            </h4>
            <img src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" height="100" width="100" " />
            </div>';
        }

        $conn->close();
        ?>
        <div id="paggin">
            <ul class="pagination">
                <li><a href="/main?paging=1">First</a></li>
                <li class="<?php if ($paging <= 1) {
                                echo 'disabled';
                            } ?>">
                    <a href="<?php if ($paging <= 1) {
                                    echo '#';
                                } else {
                                    echo "/main?paging=" . ($paging - 1);
                                } ?>">Prev</a>
                </li>
                <li class="<?php if ($paging >= $total_pages) {
                                echo 'disabled';
                            } ?>">
                    <a href="<?php if ($paging >= $total_pages) {
                                    echo '#';
                                } else {
                                    echo "/main?paging=" . ($paging + 1);
                                } ?>">Next</a>
                </li>
                <li><a href="/main?paging=<?php echo $total_pages; ?>">Last</a></li>
            </ul>
        </div>
    </div>
</body>
<?php include "footer.php"; ?>

</html>