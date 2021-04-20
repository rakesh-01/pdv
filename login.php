<html>
    <head>
       <title> </title>
       <style>
           #col{
            color:red; }
           #error{
               color:yellow;
  }
          </style>
    </head>
    <body>
</body>
</html>

<?php

$u=$_GET['uid'];
$p=$_GET['pwd'];
$cp=$_GET['cpwd'];

if($p==$cp)
{
    echo "<div id='col'>welcome </div>".$u;

}
else{
    echo "<div id='error'>does not match</div>";

}
?>


