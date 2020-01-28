<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'cseb';

$conn = mysqli_connect($hostname, $username,$password,$databaseName);
if($conn){	
    echo 'connection successful';
}
else
{
echo "connection failed!!" +
mysqli_connect_error();
}
?>