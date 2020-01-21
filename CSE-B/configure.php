<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'cseb';

if(mysqli_connect($hostname, $username,$password,$databaseName)){
    echo 'connection successful';
}
else
{
echo "connection failed!!" +
mysqli_connect_error();
}
?>