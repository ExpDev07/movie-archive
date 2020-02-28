<?php 

require_once('auth/session.php');

?>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">

        <!-- Branding -->
        <a class="navbar-brand" href="/">
            <img src="assets/images/logo.png" class="d-inline-block align-top mr-2" width="30" height="30" alt="Logo" />
            Movie Archive
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation -->
        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ml-auto">
                <!-- Movies -->
                <li class="nav-item">
                    <a class="nav-link" href="/">Movies</a>
                </li>
            </ul>
        </div>
    </div>
</nav>