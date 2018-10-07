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


<form class="form-group" action="verify.php" method="GET">

  <input type="text" name="phone" value="962790326274">

  <input type="submit" name="submit" value="Verify">

</form>
