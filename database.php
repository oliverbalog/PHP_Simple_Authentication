<?php

$servername = 'localhost';
$username='root';
$connection='prioris';

$connection = mysqli_connect($servername,$username,null,$connection);

if(!$connection){
echo('An error occured while connecting to database!');
}

?>