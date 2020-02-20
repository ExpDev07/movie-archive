
<h1>Movie Archive</h1>

<section class="row">
    <?php for ($i = 0; $i < 10; $i++) { ?>

        <article class="col-md-6 col-lg-4 mb-4">
            <div class="card">
                <!-- Thumbnail -->
                <img class="card-img-top" src="/images/placeholder.png" alt="Movie Thumbnail">

                <!-- Body -->
                <div class="card-body">
                    <!-- Movie title -->
                    <h5 class="card-title">
                        <?= 'Movie #' . $i ?> 
                    </h5>

                    <!-- Description -->
                    <p class="card-text">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure doloremque velit ipsa vero placeat voluptatum, incidunt laboriosam ducimus maiores fugit.
                    </p>

                    <!-- View -->
                    <a href="#" class="btn btn-primary btn-block py-3">
                        View Movie
                    </a>
                </div>
            </div>
        </article>

    <?php } ?>
</section>