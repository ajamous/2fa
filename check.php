<?php

/* Verify Pin Code

curl -X POST \
  https://{your_company}.restcomm.com/2fa/verify \
  --user  ' {your_account_SID}:{your_account_token}' \
  -H 'Cache-Control: no-cache' \
  -H 'Content-Type: application/json' \
  -d '{
    "service" : "MyApp",
    "number" : "+13216549879",
    "code": "294228"
}

*/

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
