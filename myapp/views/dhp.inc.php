<?php
$servername='localhost';
$dbUsername='root';
$dbPassword='';
$dbName='loginsystem';


$conn=mysqli_connect($servername,$dbUsername,$dbPassword,$dbName,3306);

if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}