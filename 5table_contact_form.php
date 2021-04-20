<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
    .rb{
      border:1px solid red;
    }
    </style>

    <title>Contact Us</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">|| Rakesh ||</a>
  
  </div>
</nav>
<?php
    $err1=$err2=$err3='';
    $validate = True;
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = htmlentities($_POST['name']);
        $email = htmlentities($_POST['email']);
        $message= htmlentities($_POST['msg']);

      if(empty($name)){$err1="Mandatory";$validate=False;}
      if(empty($email)){$err2="Mandatory";$validate=False;}
      if(empty($message)){$err3="Mandatory";$validate=False;}

      if($validate==TRUE)
      {
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
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `contact` (`name`, `email`, `message`, `dt`)
        
        VALUES ('$name', '$email', '$message', current_timestamp())";

        $result = mysqli_query($conn, $sql);
 
        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="fun()">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="fun()">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }

      }

    }

  } 
?>


<div class="container mt-3">
<h1>Contact Form</h1>
    <form action="" method="post" onsubmit="return validateForm()">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
        <small class="form-text text-muted"><span style="color:red"><?php echo $err1; ?> </span></small>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
        <small class="form-text text-muted"><span style="color:red"><?php echo $err2; ?> </span></small>
        <small class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
        <label for="desc">Message</label>
        <textarea class="form-control" name="msg" id="desc" cols="30" rows="5"></textarea>
        <small class="form-text text-muted"><span style="color:red"><?php echo $err3; ?> </span> </small>
        <small  class="form-text text-muted">Max allowed characters:300.</small>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


<script>
let itag = document.getElementsByClassName('form-control');
let valid = true;
function validateForm() {
for(i of itag)
{
  if(i.value=='')
  {
  i.classList.add("rb");
  valid = false;
  }
  else{
    i.classList.remove("rb");
  }
  
}

return valid;
}
function fun()
{
  let btn = document.getElementsByClassName('show')[0];
  btn.style.display='none';
}

</script>


</body>
</html>

