<?php


/* Send Verification Code

curl -X POST \
  https://{your_organization}.restcomm.com/2fa/send \
--user  ' {your_account_SID}:{your_account_token}' \
  -H 'Cache-Control: no-cache' \
  -H 'Content-Type: application/json' \
  -d '{
    "service" : "MyAPP",
    "from" : "+13216549878",
    "to" : "+13216549879",
    "body": "Your verification code is: {code}"
}


*/

?>


 <div class="container">

 <!-- Verification Form Start -->
<form class="form-group" action="check.php" method="GET">

  <label for="pincode">Enter Pin Code</label>

  <input type="text" name="pincode" value="">

  <input type="submit" name="submit" value="Verify">

</form>




</div>
