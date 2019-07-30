<?php
$host = 'mysql'; //servicename from docker-compose.yml
$user = 'mysqluser';
$password = 'mysqlpassword';
$db = 'my_db';

$connect = new mysqli($host, $user, $password, $db);
if($connect->connect_error){
  echo 'connection failed => ' . $connect->connect_error;
} else {
  echo 'successfully connected to mysql';
}
