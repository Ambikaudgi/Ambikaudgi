<?php
$servername="localhost";
$username="username";
$password="password";
$conn=mysqli($servername,$username,$password);
if(!$conn){
die("connection failed:" mysqli_connect_error());
}
$sql="CREATE DATABASE myDB";
if(mysqli_query($conn,$sql)){
echo "database created suceesfully";
}else{
echo "error creating database: "mysqli_error($conn);
}
mysqli_close($conn);
?> 
