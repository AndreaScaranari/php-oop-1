<?php
include_once __DIR__ . '/Models/Movie.php';

$movie1 = new Movie(1, 'Harry Potter', 'Fantasy');
$movie2 = new Movie(2, 'Rambo', 'Action');
$movie3 = new Movie(3, 'Titanic', 'Romantic');
// var_dump($movie1);

$movies = [$movie1, $movie2, $movie3];
// var_dump($movies);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($movies as $movie): ?>
        <li>
            <h3><?= $movie->title ?></h3>
            <p><?= $movie->genre ?></p>
        </li>
        <?php endforeach ;?>
    </ul>
    
</body>
</html>