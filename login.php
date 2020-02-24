<?php
include_once 'config.php';
session_start();

$emal = $_POST['email'];
$psd = $_POST['pass'];

if (!empty($emal) && !empty($psd)) {    
   $qr = "SELECT * FROM users WHERE email = '". mysqli_real_escape_string($link,$emal) ."' AND passwd = '". mysqli_real_escape_string($link,$psd) ."'" ;
   $qrey = "SELECT Id fname FROM users WHERE email =  '$emal'";   
   $result = mysqli_query($link,$qr);
   $qr = mysqli_query($link, $qrey);
    
     if (mysqli_num_rows($result) === 1 && !empty($qr)) 
      {
         while($res = $qr->fetch_assoc()) {      
             $val = $res["fname"]; 
             $_SESSION["data"] = $val ;          
            echo "<script>
            alert('Successfully Logged in $val');
           window.location.href='http://localhost/Magebit/View/Welcome.php';
           </script>";  
            $sam = $res["Id"];
            $_SESSION["id"] = $sam;
         }
      } 
       else 
      {
           echo "<script>
            alert('Chuthiya, Dekh ke type kar na... Wrong Credentials hai');
           window.location.href='http://localhost/Magebit/index.php';
           </script>";
      }     
}
   else {
       echo "<script>
            alert('All fields type kar na bsdk !!');
           window.location.href='http://localhost/Magebit/index.php';
           </script>";      
}