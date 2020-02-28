<?php

require_once('database/connection.php');

// Start or resume the session.
session_start();

/**
 * ID of the logged in user.
 */
$id = $_SESSION['user'];

/**
 * The currently logged in user.
 */
$user = null;

// Check whether the user is logged in.
if (isset($id) && !empty($id)) {

    // Fetch the currently logged in user from the database.
    $user = $mysqli->query(sprintf("SELECT * FROM users WHERE `id` = '%s'", $id))->fetch_assoc();

}