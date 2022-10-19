

<?php

$dsn = "mysql:host=localhost;dbname=games_store";
$username = "root";
$password = "";
try {
    $db = new PDO($dsn, $username, $password);
    //echo("connected");
} catch (PDOException $e){
    die(include "404.php");
    
}

function getOrders()
{

    $myQuery = "Select * from games";
    global $db;
    $qry = $db->query($myQuery);       
    $games = $qry->fetchAll();


    return $movies;
}

function getOrder($theOrderName)
{

    $games = getOrders();    
    foreach ($games as $game)
    {      
        if ($game[0] == $theOrderName){
            return $product;
        }

    }
}

function saveOrder($aryProduct)
{

        echo($aryProduct[0][0]. $aryProduct[0][1]. $aryProduct[0][2]. $aryProduct[0][3]. $aryProduct[0][4]);

    $myQuery = "INSERT INTO `orders` (`order_id`, `order_fname`, `order_lname`, `order_email`, `game_id`, `order_amount`) VALUES (NULL,'".$aryProduct[0][0]."', '".$aryProduct[0][1]."', '".$aryProduct[0][2]."', '".$aryProduct[0][3]."','".$aryProduct[0][4]."')";
    echo($myQuery);
    global $db;
    $qry = $db->query($myQuery);
    


}



?>