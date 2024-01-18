<?php
// include database connection file
include_once ("php/connect.php");

// Get id from URL to delete that user
$FD1 = $_GET['FD1'];

// Delete user row from table based on given jobID
$result = mysqli_query($conn, "DELETE FROM contact_us WHERE FD1 = $FD1");

// After delete redirect to Home, so that latest user list will be displayed.
header("location:feedback.php");
?>