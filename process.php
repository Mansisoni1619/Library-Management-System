<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Msg))
       {
           header('location:contact.php?error');
       }
       else
       {
           $to = "sonimansi633@gmail.com";

           if(mail($to,$Msg,$Email))
           {
               header("location:contact.php?success");
           }
       }
    }
    else
    {
        header("location:contact.php");
    }
?>