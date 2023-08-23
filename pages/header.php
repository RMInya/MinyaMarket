<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #04AA6D;
            color: white;
        }

        .topnav .logout {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            margin-left: 70%;
            text-decoration: none;
            font-size: 17px;
        }
    </style>
</head>

<body>
    <?php

    echo '    
        <div class="topnav">
            <a class="active" href="/main">Home</a>
            <a href="/statement">Order</a>
            <a href="/addProduct">add your product</a>
            <a href="/administration">admin</a>
            <a class="logout" href="/">Logout</a>
        </div>';

    ?>
</body>

</html>