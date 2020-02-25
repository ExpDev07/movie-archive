<?php

require('database/connection.php');

// Query the movies and fetch them as an associative array.
$movie = $mysqli->query('SELECT * FROM movies WHERE id=' . $_GET['movie'])->fetch_assoc();

?>

<h1><?= $movie['title'] ?></h1>

<p>
    <?= $movie['description'] ?>
</p>