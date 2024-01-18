<?php
session_start();
require('connect.php'); 
include('function.php');


/* login */
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
  $UserEmail = $_POST['UserEmail']; 
  $Password = $_POST['Password'];

  if ($username == "admin")
  {
    $_SESSION['userid'] = "Admin";
    $_SESSION['account'] = "admin";
    header("Location: adminIndex.php");
    die;
  }
  else
 {
    $sql = "SELECT * FROM register_details WHERE UserEmail = '$UserEmail' AND Password = '$Password'";
    $result = mysqli_query ($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0)
    {
      $register_details_data = mysqli_fetch_assoc($result);
      $_SESSION['userid'] = $register_details_data['user_id'];
      
      header("Location: ../index.html");
      die;
    }
    
  }    
}
?>