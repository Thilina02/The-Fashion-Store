<?php
    function check_login($conn)
    {
        if (isset($_SESSION['UserEmail'])) 
        {
            $UserEmail = $_SESSION['UserEmail'];
            $sql = "SELECT * FROM register_details WHERE UserEmail = '$UserEmail' limit 1";

            $result = mysqli_query($conn,$sql);
            if ($result && mysqli_num_rows($result) > 0) 
            {
                $user_data = mysqli_fetch_assoc($result);
                return $user_data;
            }
        }
        header("Location: ../register.php");
        die;
    }
?>