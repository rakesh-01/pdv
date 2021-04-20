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

$sql = "SELECT * FROM `mtse`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the DataBase<br>";
// Display the rows returned by the sql query
if($num> 0){

    // We can fetch in a better way using the while loop
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo "<b>Name:</b>".$row['first_name'] .".<br><b>Registration number</b> ". $row['regno'] ."<br><b>City:</b> ". $row['city']."<br><b>Branch:</b>".$row['branch'];
        echo "<br><hr>";
       
    }


}
?>