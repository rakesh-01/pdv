<?php
$fptr=fopen("ab.txt","a");
fwrite($fptr,"hello.\n");
fclose($fptr);

?>