<?php

$usererror = $passerror = "";


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
    if($usererror == "" and $passerror == ""){
        $servername = "sql101.byetcluster.com";
        $usname = "epiz_27024883";
        $pwd = "GP2as4pXvMYdnbV";
        $database = "epiz_27024883_db_vit_18mis7085";


$conn = mysqli_connect($servername, $usname, $pwd, $database);

if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

$username = $_POST["username"];
$pass = $_POST["pass"];

$sql = "SELECT * FROM 18mis7085_users WHERE uname = '$username' AND pass = '$pass'";

$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);

    if($count > 0){
        
        header(
            'Location:18mis7085_login_success.php'
        );
    }else{
        echo "<h2 style='color:Red;'>Login UnSuccessful. Entered Username/Password is incorrect.<br></h2>";
    }

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="18mis7085.css">
    <title>Assignment 9 | 18MIS7085</title>
</head>
<body>
    <div class="main">
        <div class="header">
            <h1>Name : K SAI SUNEETH</h1>
            <h3>RegNo:18MIS7085</h3>
            <ul>
                <li><a href="../home.html">HOME</a></li>
            </ul>
        </div>
      <br>
      <div class="layout">
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "POST">

<table width= "600">
    <tr>
        <td>User Name:</td>
        <td><input type="text" value="<?php echo $username;?>"id = "username" name = "username"  ><span >* <?php echo $usererror; ?> </span></td>
        
    </tr>
    
    <tr>
        <td>Password:</td>
        <td><input type="password" id= "pass" value = "<?php echo $pass; ?>" name = "pass" ><span>* <?php echo $passerror; ?> </span></td>
        
    </tr>
    
    <tr>
        <td colspan = 2><input type="submit"  id = "submit" value="Sign-in"></td>
    </tr>
</table>

</form>
</div>

       <br>
        <footer>
            <p>Disclamer: I have not used any unfair means for completion of the assignments</p>
        </footer>
        
    </div>
</body>
</html>