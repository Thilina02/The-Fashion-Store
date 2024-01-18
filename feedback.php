<?php  
include('php/connect.php');
// define variables to empty values  
$NameErr = $EmailErr = $Phone_NumberErr = $FeedbackErr = "";  
$Name = $Email = $Phone_Number = "";  
  
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
//String Validation  
    if (empty($_POST["Name"])) {  
         $NameErr = "Name is required";  
    } else {  
        $Name = input_data($_POST["Name"]);  
            // check if Name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$Name)) {  
                $NameErr = "Only alphabets and white space are allowed";  
            }  
    }  
		
	if (empty($_POST["Feedback"])) {  
         $FeedbackErr = "Feedback is required";  
    }	
	
    //Email Validation   
    if (empty($_POST["Email"])) {  
            $EmailErr = "Email is required";  
    } else {  
            $Email = input_data($_POST["Email"]);  
            // check that the e-mail address is well-formed  
            if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {  
                $EmailErr = "Invalid Email format";  
            }  
     }  
    
    //Number Validation  
    if (empty($_POST["Phone_Number"])) {  
            $Phone_NumberErr = "Mobile no is required";  
    } else {  
            $Phone_Number = input_data($_POST["Phone_Number"]);  
            // check if mobile no is well-formed  
            if (!preg_match ("/^[0-9]*$/", $Phone_Number) ) {  
            $Phone_NumberErr = "Only numeric value is allowed.";  
            }  
        //check mobile no length should not be less and greater than 10  
        if (strlen ($Phone_Number) != 10) {  
            $Phone_NumberErr = "Mobile no must contain 10 digits.";  
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
    <link rel="stylesheet" href="styles/feedback.css">
	
    <title>contact Us Form</title>
</head>





<body>
    <div class="container">
<h1>
    Feedback </h1>
<p>
   <b>If any trouble with our service, please feel free to contact us via telephone number or email.We are 24/7 online to give you the best service.
    
<div class="contact-box">
  <div class="contact-left">
    <h3>Sent your request</h3>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" > 
        <div class="input-row">
            <div class="input-group">
                <label>Name</label>
                <input type="text" name="Name">  <span class="error">* <?php echo $NameErr; ?> </span>		  
            </div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="input-group">
                <label>Phone</label>
                <input type="text" name="Phone_Number">  
				<span class="error">* <?php echo $Phone_NumberErr; ?> </span> 
            </div>
            </div>
            <div class="input-row">
                <div class="input-group">
                    <label>E mail</label>
                    <input type="text" name="Email">  
					<span class="error">* <?php echo $EmailErr; ?> </span>  
                </div>

             </div>
                <label>
                Feedback
                </label>
                <textarea rows="5" placeholder="Your Message"name="Feedback">  </textarea>
				<span class="error">* <?php echo $FeedbackErr; ?> </span> 

				<input type="submit" name="submit" value="Send">
    </form><hr>
    
</div>


    </div>
    </div>
    <?php  
	include("php/connect.php");
    if(isset($_POST['submit'])) {  
    if($NameErr == "" && $EmailErr == "" && $Phone_NumberErr == "" && $FeedbackErr == "" ) {  
        // get the post records
		$message = "";
		$Name = $_POST['Name'];
		$Email = $_POST['Email'];
		$Phone_Number = $_POST['Phone_Number'];
		$Feedback = $_POST['Feedback'];

		// database insert SQL code
		$sql = "INSERT INTO `contact_us`(`Name`, `Email`, `Phone_Number`, `Feedback`) VALUES ('$Name', '$Email', '$Phone_Number', '$Feedback')";

		// insert in database 
		$rs = mysqli_query($conn, $sql);
		if($rs){
			//Javascript alert msg
			echo '<script>alert("Successfully submit your Feedback");</script>';
		}
	}  
    }      
?>  
  
    <?php
                
                $db=mysqli_select_db($conn,'fashiondb');
             $querry= "SELECT * FROM `contact_us` ";
                $querry_run= mysqli_query($conn,$querry);
                
                ?>
        <center> <table border="1" >
        <tr>
            <th>Name</th>
            <th>Feedback</th>
        </tr>
        <?php
                if (mysqli_num_rows($querry_run) >0)
                {
                    while($row=mysqli_fetch_assoc($querry_run))
                    {
                        ?>
                         <tr>
                            <td> <?php echo  $row['Name']; ?> </td>
                              <td><?php   echo $row['Feedback'];?></td>
                              <!-- delete details -->
                              <?php echo "<td><a href='deletecontact.php?FD1 = $row[FD1]'>Delete</a></td>";?>
                              
                    </tr>
                         <?php
            
               
                    }
                }else{
                    echo "EMPTY RECORD";
                }
                     ?>   
                     </table></center>
                  



    
    
</body>
</html>

