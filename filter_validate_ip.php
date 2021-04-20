<?php
$ip="127.0.02";
echo filter_var($ip,FILTER_VALIDATE_IP);
 if(!filter_var($ip,FILTER_VALIDATE_IP)===false){
     echo("$ip is a valid ip address");
 }
 else{
     echo("$ip is not a valid ip address");
 }
?>