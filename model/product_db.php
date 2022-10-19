

<?php

$dsn = "mysql:host=localhost;dbname=halloweenstore";
$username = "root";
$password = "";
try {
    $db = new PDO($dsn, $username, $password);
    //echo("connected");
} catch (PDOException $e){
    die(include "404.php");
    
}

function getMovies()
{

    $myQuery = "Select * from themovies";
    global $db;
    $qry = $db->query($myQuery);       
    $theMovies = $qry->fetchAll();


    return $theMovies;
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

function displayTheMovies()
{
    $theMovies = getMovies();
     //for each array inside of the associative array display the info 
     foreach($theMovies as $aMovie){
        echo("<div class='aMovie'>");
        echo("<h3>" . $aMovie[1] ."</h3>");
        echo("<h3> Synopsis:" . $aMovie[3] ."</h3>");
        echo("<h3> Price:$" . $aMovie[2] ."</h3>");
        echo("<img src='$aMovie[4]'>");
        echo("<h3> img link:$" . $aMovie[4] ."</h3>");
        echo("</div>");
    }

}


?>