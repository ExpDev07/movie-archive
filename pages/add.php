<?php

require('database/connection.php');

// Adding of new movie.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // General info.
    $title = $mysqli->real_escape_string($_POST['title']);
    $desc  = $mysqli->real_escape_string($_POST['description']);
    $year  = $mysqli->real_escape_string($_POST['year']);
    
    // Thumbnail file.
    $thumbnail = $_POST['thumbnail'];

    // Create the movie.
    $created = $mysqli->query(sprintf(
        "INSERT INTO movies (`title`, `desc`, `release_year`, `approved`) VALUES ('%s', '%s', '%u', '%u')", 
        $title, $desc, $year, 0
    ));
}

?>

<main class="container">
    <section>
        <!-- Movie successfully created? -->
        <?php if (isset($created) && $created) { ?>
            <div class="alert alert-success">
                The movie has successfully been submitted for review. Thank you for contributing to Movie Archive!
            </div>
        <?php } ?> 

        <h1>Add movie</h1>
        <p>
            Add a new movie to our databse by filling out the form below. Please check if the movie has already been submitted by making a 
            <a href="?page=home">search</a>. Making joke submissions <span class="text-danger">may get you blacklisted</span> from adding 
            new movies.
        </p>

        <form method="POST">
            <!-- Name -->
            <div class="form-group">
                <label for="title">Name of movie</label>
                <input class="form-control" type="text" id="title" name="title" placeholder="The Avengers 4">
            </div>

            <!-- Release year -->
            <div class="form-group">
                <label for="year">Release year</label>
                <input class="form-control" type="number" id="year" name="year" placeholder="2011">
            </div>

            <!-- Description -->
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description">A descripton...</textarea>
            </div>

            <!-- Thumbnail -->
            <div class="form-group">
                <label for="thumbnail">Thumbnail</label>
                <input class="form-control-file" type="file" id="thumbnail" name="thumbnail">
            </div>

            <!-- Rights -->
            <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" id="rights" name="rights" value="true">
                <label class="form-check-label" for="rights">
                    I own the rights to this movie and/or represent its <a href="https://www.yourdictionary.com/rightsholder">rightsholders</a>.
                </label>
            </div>

            <!-- Submitting for review -->
            <div>
                <button class="btn btn-primary" type="submit">
                    Submit movie for review
                </button>
                <p class="text-muted mt-2">
                    Your submission must be reviewed and approved by a moderator before it becomes visible. This process usually takes around 
                    24-48 hours. If you have any questions, please contact us at <a href="mailto:review@moviearchive.org">review@moviearchive.org</a>.
                </p>
            </div>
        </form>
    </section>
</main>