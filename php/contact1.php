<?php  
// define variables to empty values  
$nameErr = $emailErr = $mobilenoErr = $msgErr = "";  
$name = $email = $mobileno = "";  
  
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
//String Validation  
    if (empty($_POST["name"])) {  
         $nameErr = "Name is required";  
    } else {  
        $name = input_data($_POST["name"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                $nameErr = "Only alphabets and white space are allowed";  
            }  
    }  
		
	if (empty($_POST["txtMessage"])) {  
         $msgErr = "Message is required";  
    }	
	
    //Email Validation   
    if (empty($_POST["email"])) {  
            $emailErr = "Email is required";  
    } else {  
            $email = input_data($_POST["email"]);  
            // check that the e-mail address is well-formed  
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                $emailErr = "Invalid email format";  
            }  
     }  
    
    //Number Validation  
    if (empty($_POST["mobileno"])) {  
            $mobilenoErr = "Mobile no is required";  
    } else {  
            $mobileno = input_data($_POST["mobileno"]);  
            // check if mobile no is well-formed  
            if (!preg_match ("/^[0-9]*$/", $mobileno) ) {  
            $mobilenoErr = "Only numeric value is allowed.";  
            }  
        //check mobile no length should not be less and greater than 10  
        if (strlen ($mobileno) != 10) {  
            $mobilenoErr = "Mobile no must contain 10 digits.";  
            }  
    }    
}  
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
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
                
                <img style="margin-right: 60px;" align="right" src="image/user1.png" width="60" height="60"></div>
            
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



<body>
    <div class="container">
<h1>
    Connect With Us
</h1>
<p>
   <b>If you have any question or queries a member of staff will always be happy to help.
   Free to contact us by telephone or email and<br>we will be sure to get back to you
   as soon as possible.</b>
<div class="contact-box">
  <div class="contact-left">
    <h3>Sent your request</h3>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" > 
        <div class="input-row">
            <div class="input-group">
                <label>Name</label>
                <input type="text" name="name">  <span class="error">* <?php echo $nameErr; ?> </span>		  
            </div>
            <div class="input-group">
                <label>Phone</label>
                <input type="text" name="mobileno">  
				<span class="error">* <?php echo $mobilenoErr; ?> </span> 
            </div>
            </div>
            <div class="input-row">
                <div class="input-group">
                    <label>E mail</label>
                    <input type="text" name="email">  
					<span class="error">* <?php echo $emailErr; ?> </span>  
                </div>

             </div>
                <label>
                    Message
                </label>
                <textarea rows="5" placeholder="Your Message"name="txtMessage">  </textarea>
				<span class="error">* <?php echo $msgErr; ?> </span> 

				<input type="submit" name="submit" value="Send">
    </form>
</div>
<div class="contact-right">
    <h3>Reach Us </h3>
    <table>
        <tr>
            <td>Email</td>
            <td>capitallabour@gmail.com</td>
        </tr>
        <tr>
            <td>Phone</td>
            <td>+94 70 383 1410</td>
        </tr>
        <tr>
            <td>Address</td>
            <td>No12,Old Pussella Rd<br>Kandy<br></td>
        </tr>

    </table>

</div>

    </div>
    </div>
    <hr id = "sepHeaderFooter">

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

<?php  
	include("config.php");
    if(isset($_POST['submit'])) {  
    if($nameErr == "" && $emailErr == "" && $mobilenoErr == "" && $msgErr == "" ) {  
        // get the post records
		$message = "";
		$txtName = $_POST['name'];
		$txtEmail = $_POST['email'];
		$txtPhone = $_POST['mobileno'];
		$txtMessage = $_POST['txtMessage'];

		// database insert SQL code
		$sql = "INSERT INTO `tbl_contact` (`Id`, `fldName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

		// insert in database 
		$rs = mysqli_query($con, $sql);
		if($rs){
			//Javascript alert msg
			echo '<script>alert("Successfully submit your inquiry");</script>';
		}
	}  
    }      
?>  
  