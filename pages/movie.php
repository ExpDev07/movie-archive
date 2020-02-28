<?php

require('database/connection.php');

// Query the movies and fetch them as an associative array.
$movie = $mysqli->query(sprintf("SELECT * FROM movies WHERE `id` = '%s'", $_GET['movie']))->fetch_assoc();

?>

<main class="container">
    <h1><?= $movie['title'] ?></h1>

    <p>
        <?= $movie['desc'] ?>
    </p>
</main>