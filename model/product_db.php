

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

    // Selecting from our database and Ordering by movietitle, I got this the myphpadmit page to order and copyed the sql
    $myQuery = "SELECT * FROM `themovies` ORDER BY `themovies`.`movieTitle` ASC";
    global $db;
    $qry = $db->query($myQuery);       
    $theMovies = $qry->fetchAll();


    return $theMovies;
}
//used to get a specsifict movie
function getOrder($theOrderName)
{

    $movies = getOrders();    
    foreach ($movies as $movie)
    {      
        if ($movie[0] == $theOrderName){
            return $movie;
        }

    }
}
//used to save into the database if need but did not do for assignment

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
        echo("<div class='card' style='width: 18rem;'>
        <img src='$aMovie[4]' class='card-img-top' alt='...'>
        <div class='card-body'>
          <h5 class='card-title'>Movie: $aMovie[1]</h5>
          <h6 class='card-subtitle mb-2 text-muted'>Price:$aMovie[2]$</h6>
          <p class='card-text'>Synopsis $aMovie[3]</p>
          
        </div>
      </div>");
    }

}


?>