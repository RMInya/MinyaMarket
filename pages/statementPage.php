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

    <?php
    $name = $phoneNumber = $comment = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = input($_POST["name"]);
        $email = input($_POST["phone"]);
        $comment = input($_POST["comment"]);
    }

    function input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <div id="container">
        <form method="post" action="../statementForm.php">
            Name: <input type="text" name="name">
            <br><br>
            Phone: <input type="text" name="phone">
            <br><br>
            Comment: <textarea name="comment" rows="5" cols="40"></textarea>
            <br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>

</html>