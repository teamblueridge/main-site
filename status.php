<?php
//Found in http://stackoverflow.com/questions/9817046/get-the-site-status-up-or-down
//Only http allowed, if configured wrong on server side: https won't work

function checkOnline($domain) {
   $curlInit = curl_init($domain);
   curl_setopt($curlInit,CURLOPT_CONNECTTIMEOUT,10);
   curl_setopt($curlInit,CURLOPT_HEADER,true);
   curl_setopt($curlInit,CURLOPT_NOBODY,true);
   curl_setopt($curlInit,CURLOPT_RETURNTRANSFER,true);

   //get answer
   $response = curl_exec($curlInit);

   curl_close($curlInit);
   if ($response) return true;
   return false;
}
if(checkOnline('http://google.com')) { echo "yes"; }
?>