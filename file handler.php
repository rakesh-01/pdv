<?php
// readfile("rakesh.txt");
$fptr=fopen("rakesh.txt","r");

$content= fread($fptr,filesize("rakesh.txt"));
fclose($fptr);

echo $content;
// fwrite($fptr,"hello ");

?>