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
        <form method="post" action="../addProductForm.php" enctype="multipart/form-data">
            Product name: <input type="text" name="productName">
            <br><br>
            Enter value of product: <input name="productValue"></input>
            <br><br>
            Product description: <input type="text" name="productDesc" rows="5" cols="20">
            <br><br>
            Select Image File: <input type="file" name="image">
            <br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>

</html>