<?php

$servername="127.0.0.1";
$username="Rakesh";
$password="Rakesh.9063949494";
$database="rakesh";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
    die("sorry :" .mysqli_connect_error());
}
else{
    echo "connection is successful<br>";
}


$sql="CREATE TABLE mtse
(
    regno varchar(12) NOT NULL,
    first_name varchar(30) NOT NULL,
    city varchar(20),
    branch varchar(10) NOT NULL,
    PRIMARY KEY (regno)
)";

$result= mysqli_query($conn,$sql);
if($result){
    echo "the table created successfully<br>";
}
else{
    echo "database is not created sorry ".mysqli_error($conn);
}

?>