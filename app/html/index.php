<?php
$host = 'mysql'; //servicename from docker-compose.yml
$user = 'mysqluser';
$password = 'mysqlpassword';
$db = 'database';

$connect = new mysqli($host, $user, $password, $db);

if(!$connect){
  die('connection failed => ' . mysqli_error());
}

echo 'successfully connected to mysql';
$sql = 'SELECT first_name, last_name FROM users';
$query = mysqli_query($connect, $sql);

if (mysqli_num_rows($query) > 0) {
  echo '<h2>Geniuses</h2>';
  echo '<ol>';
  while($row = mysqli_fetch_assoc($query)) {
    echo '<li>' . $row['first_name'] . ' ' . $row['last_name'] . '</li>';
  }
  echo '</ol>';
} else {
  echo "Oops, there's no content to display.";
}

mysqli_close($connect);
