<?php

// Verification Code Sent , The Pin is

$pincode = 1234;


    if ($_GET['pincode'] == $pincode) {
        // code...
      header( "refresh:3;url=dashboard.php" );
      echo "Success! Please wait.";


      } else {
        header( "refresh:3;url=verify.php" );
        echo "Error! Please Try again.";
      }


 ?>
