<?php
    Include 'php/connect.php';

    if(isset($_POST['submit'])){
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Address = $_POST['Address'];
        $City = $_POST['City'];
        $State = $_POST['State'];
        $Zip = $_POST['Zip'];
        $Cardname = $_POST['Cardname'];
        $CardNo = $_POST['CardNo'];
        $Month = $_POST['Month'];
        $Year = $_POST['Year'];
        $CVV = $_POST['CVV'];

        $sql = "INSERT INTO payment_details (Name,Email,Address,City,State,Zip,Cardname,CardNo,Month,Year,CVV) 
        VALUE ('$Name','$Email','$Address','$City','$State','$Zip','$Cardname','$CardNo','$Month','$Year','$CVV')";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo "Data insert Successfully";
        }else{
            die("Connection failed" .mysqli_connect_error());
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="styles/pystyle.css">

</head>
<body>

<div class="container">

    <form  METHOD="POST">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" name="Name" placeholder="enter full name">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" name="Email" placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" name="Address" placeholder="enter address">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" name="City" placeholder="city">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" name="State" placeholder="province">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" name="Zip" placeholder="123 456">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="image/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" name="Cardname" placeholder="enter name on card">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" name="CardNo" placeholder="####-####-####-####">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" name="Month" placeholder="january">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" name="Year" placeholder="2022">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" name="CVV" placeholder="1234">
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" name="submit" value="Make Payment" class="submit-btn">

    </form>

</div>    
    
</body>
</html>