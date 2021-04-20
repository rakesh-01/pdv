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


$sql = "DELETE FROM mtse WHERE city = 'hyd'";
$result = mysqli_query($conn, $sql);
$afr = mysqli_affected_rows($conn);
echo "<br>Number of affected rows: $afr <br>";

if($result){
    echo "Delete successfully";
}
else{
    $err = mysqli_error($conn);
    echo "Not Delete successfully due to this error --> $err";
}

?>
