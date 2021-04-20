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
    echo "Connection is successful<br>";
}


$sql = "SELECT * FROM mtse WHERE city='kings_landing'";
$result = mysqli_query($conn, $sql);
// Usage of WHERE Clause to fetch data from the database
$num = mysqli_num_rows($result);
echo $num . " records found in the DataBase<hr>";
echo "<u><b>OLD RECORD</b></u><br>";

if($num> 0){  
    while($row = mysqli_fetch_assoc($result)){ 
        echo "<b>Name:</b>".$row['first_name'] .  ".<br><b>Registration number</b> ". $row['regno'] ."<br><b>City:</b> ". $row['city']."<br><b>Branch:</b>".$row['branch'];
        echo "<br><hr>";
    }
}


// Usage of WHERE Clause to Update Data
$sql = "UPDATE mtse SET city='mumbai' WHERE city='kings_landing'";
$result = mysqli_query($conn, $sql);

$aff = mysqli_affected_rows($conn);
echo "Number of affected rows: $aff <br>";
if($result){
    if($aff>0)echo "We updated the record successfully<hr>";
}
else{
    echo "We could not update the record successfully<hr>";
}



echo "<u><b>UPDATED RECORD</b></u><br>";
$sql = "SELECT * FROM mtse WHERE city='mumbai'";
$result = mysqli_query($conn, $sql);

// Usage of WHERE Clause to fetch data from the database
$num = mysqli_num_rows($result);
 echo $num . " records found in the DataBase<br>";

if($num> 0){  
    while($row = mysqli_fetch_assoc($result)){ 
        echo "<b>Name:</b>".$row['first_name'] .  ".<br><b>Registration number</b> ". $row['regno'] ."<br><b>City:</b> ". $row['city']."<br><b>Branch:</b>".$row['branch'];
        echo "<br><hr>";
    }
}

?>
