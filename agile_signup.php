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
    header("Location:18mis7073_success.php");
   
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}


    }

}

?>
<html>
    <head>
        <title>Text Transfer Portal</title>
        <link rel="stylesheet" href="agile_signup.css">
        <style>
            .lbl {
                display: inline-block;
                width: 100px;
                margin-top:10px;
            }
            input,textarea
            {
                margin-top:10px;
            }
            span{
                margin:3px;
                color:red;
                }
        </style>
    </head>
    
    <body>
       
    <div class="top">
  <div class="bar black card">
    <a class="bar-item button padding-large hide-medium hide-large right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="bar-item button padding-large">HOME</a>
    <a href="#band" class="bar-item button padding-large hide-small">ABOUT US</a>
    <a href="#band" class="bar-item button padding-large hide-small">CREATE CLIP</a>
    <a href="#tour" class="bar-item button padding-large hide-small">VIEW CLIP</a>
    
    <div class="dropdown-hover hide-small">
      <button class="padding-large button" title="More">CUSTOMIZE <i class="fa fa-caret-down"></i></button>     
      <div class="dropdown-content bar-block card-4">
        <a href="#" class="bar-item button">Set timer</a>
        <a href="#" class="bar-item button">Destroy</a>
        <a href="#" class="bar-item button">Media</a>
      </div>

    </div>
    <a href="#contact" class="bar-item button padding-large hide-small">CONTACT</a>
    <a href="javascript:void(0)" class="padding-large hover-red hide-small right">login</a>
  </div>
</div>
            
        
        
            <div class="layout">
      <form action="assignment8.php" method = "POST">

<table width= "600">
    <tr>
        <td>Name</td>
        <td><input type="text" value="<?php echo $username;?>"  id = "username" name = "username"  ><span >* <?php echo $usererror; ?> </span></td>
        
    </tr>
    
    <tr>
        <td>Password</td>
        <td><input type="password" id= "pass" value = "<?php echo $pass; ?>" name = "pass" ><span  >* <?php echo $passerror; ?> </span></td>
        
    </tr>
    <tr>
        <td>C Password</td>
        <td><input type="password" id = "cpass" value = "<?php echo $cpass; ?>" name = "c-pass" ><span >* <?php echo $cpasserror; ?>   </span></td>
        
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="email"  id = "email" value = "<?php echo $email; ?>" name="email" id="mail-id" ><span >* <?php echo $emailerror; ?>  </span></td>
        
    </tr>
    <tr>
        <td>Date of Birth</td>
        <td><input type="date" name="date" id="date" value = "<?php echo $date ?>"><span >* <?php echo $dateerror; ?>   </span></td>
    </tr>
    
    
    <tr>
        <td colspan = 2><input type="submit"  id = "submit" value="Submit">&nbsp;<input type="reset" id="reset" value="Reset"></td>
    </tr>
</table>

</form>
</div>
        


        
      


    </body>

</html>




