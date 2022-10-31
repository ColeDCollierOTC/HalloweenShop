<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ADD A MOVIE</h1>
    <form action="index.php" method="post">
    <input type="text" name="newMovieTitle" value="Put Title Here"><br>
    <input type="text" name="newMoviePrice" value="Put Price Here"><br>
    <input name="newMovieDescription" placeholder="Put Movie Synopsis Here" ><br>
    <input type="hidden" name="addedMovie" value="addedMovie">
    <input type="submit" value="Add New Movie">

    </form>
</body>
</html>