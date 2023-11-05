<?php

// Connect to the database.
require 'admin/dbcon.php';

// Start a new session.
session_start();

// Check if the user is logged in.
if (!ISSET($_SESSION['voters_id'])) {
  // The user is not logged in.
  // Redirect the user to the login page.
  //header("location:index.php");
} else {
  // The user is logged in.

  // Get the user's ID.
  $session_id = $_SESSION['voters_id'];

  // Query the database for the user's information.
  $user_query = $conn->query("SELECT * FROM user WHERE user_id = '$session_id'") or die(mysqli_errno());

  // Fetch the user's information from the database.
  $user_row = $user_query->fetch_array();


  // Check if the user's information is set and not NULL.
  if (isset($user_row)) {
    // The user's information is set and not NULL.
    // Assign the user's username to the variable $user_username.
    $user_username = $user_row['firstname'] . " " . $user_row['lastname'];
  } else {
    // The user's information is not set or is NULL.
    // Do nothing.
  }
}

?>