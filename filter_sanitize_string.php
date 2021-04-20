<?php
$str="<h1>Hello world</h1>";
$newstr=filter_var($str,FILTER_SANITIZE_STRING);
echo $newstr;
?>