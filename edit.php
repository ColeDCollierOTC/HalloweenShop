<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
 include("model/product_db.php");
 $id = filter_input(INPUT_GET,'id');
 $product = getproduct($id);
 print_r($product);

?>
    <h1>Edit the Product</h1>
    <form action="./index.php" method="post">
    <form action="index.php" method="post">
    <input type="text" name="pTitle" value=<?= $product['movieTitle']?>>
    <input type="text" name="pPrice" value=<?= $product['moviePrice']?>>
    <input type="hidden" name="pID" value=<?= $product['movieID']?>>
    <input type="hidden" name="editedMovie" value="editedMovie">
    <input type="submit" value="Save Changes">



    </form>
</body>
</html>