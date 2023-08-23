<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./pages/header.php"; ?>
    <style>
        .container {
            justify-content: center;
            text-align: center;
        }

        .container a {

            padding: 15px;
            float: left;
            color: black;
            padding: 7px 8px;
            text-decoration: none;
            font-size: 17px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Admin Control Panel</h1>

        <form action="index.php" method="post">
            <button name="info" value="adminStatements"><a href="/administration/statements">statements</a></button>
            <button name="info" value="info2"><a href="/administration/users">users</a></button>
        </form>
    </div>
</body>

</html>