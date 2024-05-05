<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "medicarehub";

//creating a connection
$connection = new mysqli($servername, $username, $password, $database);

//check connection
if($connection->connect_error){
   die("Connection Failed!: " . $connection->connect_error);
          }