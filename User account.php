<?php
    include_once'php/connect.php'
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles/Home.css">
    <title>home</title>


</head>
<body>
    <table style="width: 100%; background-color:transparent; border-radius: 12px;" border="0">
        <tr>
            <th width="5%">
                <img src="image/logo.jpg" width="60" height="60">
                
            </th>
            <th width="50%">
                <h3 align="left" font-style= "font-size: 10px;">UNIQUE FASHION STORE</h3>
                
            </th>
           
         
            </th>
            <th width="5%"><br>
               <div class="shoppingbal"><button class="button2"> <img align="center"  src="image/shopping-cart.png" width="25" height="22"><br>
                SHOPPING CART</button></div>
                
            </th>
            <th width="20%">
                <a href="register.html" class="button1" type="button">sign in</a>
                <a href="" class="button1" type="button">sign out</a>
                
                
                <img style="margin-right: 60px;" align="right" src="image/user1.png" width="60" height="60">
            
            </th>
        </tr>
</table><br>





 <ul class="menu">
    <form class="menu">
        <input type="text" placeholder="search">
        <button class="button">search</button>
     </form>

    <li class="menu"><a href="index.html">Home</a></li>
    <li class="menu"><a href="cosmetics.html">Cosmetics</a></li>
    <li class="menu"><a href="accessories.html">Accessories</a></li>
    <li class="menu"><a href="offers.html">Offers</a></li>
    <li class="menu"><a href="kids.html">Kids</a></li>
    <li class="menu"><a href="mens.html">Men</a></li>
    <li class="menu"><a href="womens.html">Women</a></li>
 </ul>
<br><br>
<div class="useracc">
    <center>
        <img src="image/Userimg.png" alt="userimage"width ="150px" height="150px">
        <P>Name - 
        <?php
                        $sql = "SELECT * FROM register_details WHERE UserID = '1';";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);

                        if ($resultCheck > 0) {
                        	while ($row = mysqli_fetch_assoc($result)) {
                        	echo $row['UserName'];
                            	}
                        	}            
        ?>
        </P>
        <p>Email - 
        <?php
                        $sql = "SELECT * FROM register_details WHERE UserID = '1';";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);

                        if ($resultCheck > 0) {
                        	while ($row = mysqli_fetch_assoc($result)) {
                        	echo $row['UserEmail'];
                            	}
                        	}            
        ?>
        </p>
    </center>
</div>
 
<footer>
    <div class="footer">
       
        <table style="width: 100%; background-color:transparent; border-radius: 12px;" border="0">
            <tr>
                <th>
                  <div class="balfuter" style= "margin-left:20px;"> <img src="image/delivery.png" width="60" height="60"></div> 
                    <div class="font1" style="margin-left:35px ;">ISLAND WIDE<br> DELIVERY</div> 
                </th>

                <th>
                   <div  class="balfuter" style= "margin-left:100px;"> <img src="image/24-hours.png"  width="60" height="60"></div> 
                    <div class="font1" style="margin-left: 70px;"> ACCEPTING <br>ORDERS 24/7</div>  
                </th>

                <th>
                    <div class="balfuter" style="margin-left: 10px;"> <img src="image/clothes.png"  width="60" height="60"></div>
                    <div class="font1">NEW STYLES<br> LAUNCHES IN EVERY WEEK</div>
                    </th>
            </tr>
            <tr>
        </table>
            <hr width="100%" height="40px">

            <table class="table2" style="width: 100%; background-color:transparent; border-radius: 12px;" border="0">
                
                
               <tr>  
                <th align="left" style="font-family:sans-serif;"><b>CATEGORIES</b></th> 
                </tr>
                
                <tr>
                <td> 
                    <div class="position"> 
                    <ul>
                        
                        <li><a href="aboutus.html"> About Us</a></li>
                        <li><a href="womens.html"> Womens wear</a></li>
                        <li><a href="mens.html"> Mens Wear</a></li>
                        <li><a href="kids.html">Kids</a></li>
                        <li><a href="offers.html">Offers</a></li>
                        <li><a href="accessories.html">Accessories</a></li>
                        <li><a href="cosmetics.html">Cosmetics</a></li>
                        <li><a href="contact.php">Feedback</a></li>
                    </div>
                    </ul>
                    </td>
                  
                        
                </tr>

                <tr>
                    <table class="table2" style="width: 100%; background-color:transparent; border-radius: 12px;" border="0">
                        
                            <th colspan="2" align="left">CONTACT US</th>
                            <th colspan="2" align="center">CONNECT WITH US</th>
                        </tr>
                        <tr>
                            <td><img src="image/goldp.png" width="30" height="30">
                            </td>
                            <td align="left">+94 763452318</td>
                            
                            <td align="center"> <img src="image/p.png" width="30" height="30"> </td> 

                            </tr>S
                            <tr>
                           
                            <td><a href=""><img src="image/golde.png" width="30" height="30"></a> </td>
                            <td align="left"><a href=""></a>uniquefashion@gmail.com</td>

                            <td align="center"><a href=""><img src="image/m.png" width="30" height="30"></a> </td>
                            </tr>
                        
                            <tr>
                            <td></td>
                            <td></td>
                            <td align="center"><a href=""></a><img src="image/f.png" width="30" height="30"></a></td>
                        </tr>

                        
                    </table>
                    
                </tr>

    </div>
    
</footer>

   
</body>

</html>