
<?php

require('database/connection.php');

// Query the movies and fetch them as an associative array.
$movies = $mysqli->query('SELECT * FROM movies')->fetch_all(MYSQLI_ASSOC);

?>

<!-- Displaying of the movies -->
<section class="row">
    <?php foreach ($movies as $movie) { ?>

        <!-- A movie -->
        <article class="col-md-6 col-lg-4 mb-4">
            <div class="card">
                <!-- Thumbnail -->
                <img class="card-img-top" src="<?= $movie['thumbnail'] ?? 'assets/images/placeholder.png' ?>" alt="Movie Thumbnail">

                <!-- Body -->
                <div class="card-body">
                    <!-- Movie title -->
                    <h5 class="card-title">
                        <?= $movie['title'] ?> 
                    </h5>

                    <!-- Description -->
                    <p class="card-text">
                        <?= $movie['description'] ?>
                    </p>

                    <!-- View -->
                    <a href="?page=movie&movie=<?= $movie['id'] ?>" class="btn btn-primary btn-block py-3">
                        View Movie
                    </a>
                </div>
            </div>
        </article>

    <?php } ?>
</section>