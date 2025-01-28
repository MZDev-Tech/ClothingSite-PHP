<?php
$server = 'localhost';
$user = 'root';
$password='';
$dbName='clothing_site';

$con = mysqli_connect($server,$user,$password,$dbName);

if(!$con){
   die( "Connection Failed: ".mysqli_connect_error());
}

?>