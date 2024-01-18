<?php
    Include 'connect.php';

    if(isset($_POST['submit'])){
        $UserName = $_POST['UserName'];
        $UserEmail = $_POST['UserEmail'];
        $Password = $_POST['Password'];

        $sql = "INSERT INTO register_details (UserName,UserEmail,Password) 
        VALUE ('$UserName','$UserEmail','$Password')";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo "Data insert Successfully";
        }else{
            die("Connection failed" .mysqli_connect_error());
        }
    }
?>