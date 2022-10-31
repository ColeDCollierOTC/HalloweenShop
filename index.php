<!-- 
  Project Name:Halloween Shop 
  Date Started: 10/19/2022

  Contributers:
    Cole Collier
    Lucas Stephens




-->







<?php
  //including functions
include("./model/product_db.php");


$editedMovie = filter_input(INPUT_POST,'editedMovie');
  if($editedMovie){
      //save changes
      $productID = filter_input(INPUT_POST,'pID');
      $pTitle = filter_input(INPUT_POST,'pTitle');
      $pPrice = filter_input(INPUT_POST,'pPrice');

      $sql ="update themovies set movieTitle = '$pTitle',moviePrice = $pPrice where movieID = $productID";
      // echo($sql);
      $qry = $db->query($sql);
  }

  $addedMovie = filter_input(INPUT_POST,'addedMovie');
  if($addedMovie)
  {
    $newMovieTitle = filter_input(INPUT_POST,'newMovieTitle');
    $newMoviePrice = filter_input(INPUT_POST,'newMoviePrice');
    $newMovieDescription = filter_input(INPUT_POST,'newMovieDescription');
    $sql ="INSERT INTO `themovies` (`movieID`, `movieTitle`, `moviePrice`, `movieDescription`, `movieImage`) VALUES (NULL, '$newMovieTitle', '$newMoviePrice', '$newMovieDescription', '');";
    //echo($sql);
    $qry = $db->query($sql);

  }


// Create a table of products
$products = array();
// grabs and fill array with movie from database
$products = getMovies();
//test code for cart
// $products['movie-1'] = array('name' => 'movie1', 'cost' => '60.00');
// $products['movie-2'] = array('name' => 'movie2', 'cost' => '59.99');
// $products['movie-3'] = array('name' => 'movie3', 'cost' => '30.00');

?>



<!doctype html>
<html lang="en">

<head>
  <title>Halloween Shop</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- link to the styles sheet -->
    <link rel="stylesheet" href="./assets/styles.css">
    <!-- link to the google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nosifer&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Butcherman&family=Nosifer&display=swap" rel="stylesheet">
  
</head>

<body>
  <header>
    <div class="pageBanner">

    <h1>Ghostly Galore Movies</h1>
    
    <div class="bannerImages">

    <img src="./assets/images/happyhalloween.gif" alt="">
    <img src="./assets/images/ghost.gif" alt="" srcset="">

    </div>
  
    <h1>Your ONE Stop Shop for All Movies Halloween!!!</h1>

    </div>
    
    <?php
    
      
      //including the navbar view 
        include "./view/navigation.php";
        //displaying avaiable movies to the user 
        include("./view/displayMovies.php");

    ?>
  </header>
  <main>
  <h1>Test Playground for editing the halloween Data</h1><br>
  <div class="testingEdit">
  <?php
  //if statment to see if the product has been changed
  
  foreach($products as $product){
    $productID = $product['movieID'];
    echo("Product: $product[movieTitle] Price: $product[moviePrice]$ <br>
    <a href='./edit.php?id=$productID'>Edit Database Item</a><br>");
  }

  echo("<h1>Want To ADD A MOVIE CLICK HERE</h1><br>");
  echo("<a href='./addMovie.php'>ADD A MOVIE</a>")
  ?>
  </div?

   




  


</main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>