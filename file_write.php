<?php 

$fptr=fopen("ab.txt","w");
fwrite($fptr,"lannisters always pays the dets \n");

fwrite($fptr,"you know nothing");
fclose($fptr);
?>