<?php



$usererror = $username = $email = $emailerror = $pass = $passerror = "";
$cpass = $cpasserror = $date = $dateerror = "";


if ($_SERVER['REQUEST_METHOD']=="POST"){    
    if (empty($_POST["username"])){           
        $usererror="Name is Required";        
    }

    if (empty($_POST["email"])){           
        $emailerror="Email is Required";        
    }

    if(strlen($_POST["pass"]) <= 8){
        $passerror = "Password must be 8 characters long.";
    }
   
    if(preg_match("#[0-9]+#",$pass)) {
        $passerror = "Password must contain atleast 1 number";
    }
    

    if($_POST["pass"] === $_POST["c-pass"]){
      
    }else{
        $cpasserror = "cPassword is not same as password entered.";
    }
    
    if(empty($_POST["date"])){
        $dateerror = "Date is required.";
    }

    if($usererror == "" and $emailerror == "" and $passerror == "" and $cpasserror == "" and $dateerror == ""){
  
  
      $servername = "sql202.byetcluster.com";
$usname = "epiz_27160779";
$pwd = "2Ddgqyurxi";
$database = "epiz_27160779_db_vit_18mis7073";


$conn = mysqli_connect($servername, $usname, $pwd, $database);

if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

$username = $_POST["username"];
$pass = $_POST["pass"];
$email = $_POST["email"];
$dob  =$_POST["date"];
  
$sql = "INSERT INTO 18mis7073_users(uname,password,email,dob) VALUES ('$username', '$pass','$email','$dob')";

$result = mysqli_query($conn, $sql);


if($result){
    header("Location:18mis7073_validation_success.php");
   
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}


    }

}

?>

