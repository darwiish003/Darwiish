<?php

$servername ="localhost";
$username="root";
$password="";
$dbname="eaudb";
$con=new mysqli($servername ,$username,$password,$dbname);
if ($con->connect_error){
   die("ciladd aya dhacday ".$con->connect_error);
}
echo "database connected"
?>
