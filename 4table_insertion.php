<?php

// Connecting to the Database
$servername = "127.0.0.1";
$username = "Rakesh";
$password = "Rakesh.9063949494";
$database = "rakesh";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

// Variables to be inserted into the table

$a = "18MIS7072";
$b = "arya_stark";
$c = "kings_landing";
$d ="mtse";

// Sql query to be executed
$sql = "INSERT INTO mtse(regno,first_name,city,branch) VALUES ('$a', '$b','$c','$d')";
$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if($result){
    echo "The record has been inserted successfully successfully!<br>";
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}
?>
