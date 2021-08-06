<?php
  
        
        $conn = mysqli_connect("localhost", "root", "", "feedback");
    
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        $firstname =  $_REQUEST['firstname'];
        $lastname =  $_REQUEST['lastname'];
        $email = $_REQUEST['email'];
        $country = $_REQUEST['country'];
        $subject = $_REQUEST['subject'];
          
  
        $sql = "INSERT INTO feedback (firstname, lastname, email, country, subject) VALUES ('$firstname', '$lastname', '$email', '$country', '$subject')";
          
        if(mysqli_query($conn, $sql))
        {
            function function_alert($message) {
      
         // Display the alert box 
         echo "<script>alert('$message');
        </script>";
        }

        function_alert("Thank You! Your message is submitted.");
  
        } 
        else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>