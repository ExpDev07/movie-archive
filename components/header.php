<?php

/**
 * Gets the path to a random wallpaper.
 * 
 * https://stackoverflow.com/a/4478788
 */
function get_wallpaper() {
    // Get all wallpapers in directory and pick a random one.
    $wallpapers = glob('assets/images/wallpapers' . '/*.*');
    return $wallpapers[array_rand($wallpapers)];
}

?>

<header class="header bg bg-dark py-3" style="background-image: url(/<?= get_wallpaper() ?>)">
    <div class="container">
    
        <!-- Search movies -->
        <form method="GET" action="/">
            <div class="input-group input-group-lg">
                <input class="form-control" name="query" placeholder="Scary Movie 2" />
                <div class="input-group-append">
                    <button class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>
    
    </div>
</header>