<?php

$dbhost='localhost';
$dbname='enigvvag_mydb';
$dbusername='enigvvag_root';
$dbpass='Aaku1998@';

$conn=mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);

if($conn == false){
    dir('Error: Cannot connect');
}

?>