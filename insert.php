<?php
  
        
        $conn = mysqli_connect("localhost", "root", "", "contact");
    
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        $name =  $_REQUEST['name'];
        $Msg = $_REQUEST['message'];
        $email = $_REQUEST['email'];
          
  
        $sql = "INSERT INTO contact (name, Msg, email) VALUES ('$name','$Msg','$email')";
          
        if(mysqli_query($conn, $sql))
        {
            function function_alert($message) {
      
    // Display the alert box 
    echo "<script>alert('$message');</script>";
}
  
  
// Function call
function_alert("Thank You! Your message is submitted.");
  
        } 
        else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>