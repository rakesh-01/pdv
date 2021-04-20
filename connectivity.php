<?php

$servername="127.0.0.1";
$username="epiz_27027745";
$password="yEvPFGBryF";

$conn = mysqli_connect($servername,$username,$password);

if(!$conn)
{
    die("sorry :" .mysqli_connect_error());
}
else{
    echo "connection is successful";
}

?>