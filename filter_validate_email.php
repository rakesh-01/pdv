<?php
$email="rakesh@gmail.com";

$email=filter_var($email,FILTER_SANITIZE_EMAIL);
if(!filter_var($email,FILTER_SANITIZE_EMAIL)===false){
    echo("$email is a valid email");
}
else{
    echo("$email is not a valid email");
}

?>