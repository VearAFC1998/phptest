<?php

$uname =$_POST['username'];
$pass = $_POST['password'];

if ($uname == "awesome" && $pass == "123")
       echo "Content after login has been succesful."";

else 

       echo "invalid";
?>