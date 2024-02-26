<?php
include_once __DIR__ . '/Models/Movie.php';

$director1 = new Director (1, 'Samuele', 'Bianchi');
$director2 = new Director (2, 'Mario', 'Rossi');
$director3 = new Director (3, 'Giulia', 'Verdi');

$movie1 = new Movie(1, 'Harry Potter', 'Fantasy', $director1);
$movie2 = new Movie(2, 'Rambo', 'Action', $director2);
$movie3 = new Movie(3, 'Titanic', 'Romantic', $director3);

$movies = [$movie1, $movie2, $movie3];

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
            <address><?= $movie->director->getFullName() ?></address>
        </li>
        <?php endforeach ;?>
    </ul>
    
</body>
</html>