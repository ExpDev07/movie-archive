<?php

require('database/connection.php');

// Session.
session_start();

// Logging in.
if($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Authentication credentials.
    $email    = $mysqli->real_escape_string($_POST['email']);
    $password = $mysqli->real_escape_string($_POST['password']);

    // Fetch user that is logging in.
    $user = $mysqli->query(sprintf("SELECT * FROM users WHERE `email` = '%s' AND `password` = '%s'", $email, $password))->fetch_assoc();

    // Successful login?
    if ($user) {
        // Set currently logged in user to the user's id.
        $_SESSION['user'] = $user['id'];

        // Redirect to home!
        header('Location: ?page=home');
        return;
    }

}

?>

<main class="container">
    <section>
        <!-- Login failed? -->
        <?php if (false) { ?>
            <div class="alert alert-danger">
                Login failed. Make sure that you're entering the correct password.
            </div>
        <?php } ?> 

        <h1>Login</h1>
        <p>
            Login to your account here at Movie Archive.
        </p>

        <form method="POST">
            <!-- Email -->
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" id="email" name="email" placeholder="example@gmail.com">
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" id="password" name="password" placeholder="*********">
            </div>

            <!-- Login -->
            <div>
                <button class="btn btn-primary" type="submit">
                    Login now
                </button>
                <p class="text-muted mt-2">
                    Don't have an account? It's quick and easy. <a href="?page=register">Create one now</a>.
                </p>
            </div>
        </form>
    </section>
</main> 



