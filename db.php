<?php
$servername = "127.0.0.1";
$username = "your_user_name";
$password = "password";
$dbName = "mydata";

$link = mysqli_connect($servername, $username, $password);
​
if (!link) {
  die("Connection failed: " . mysqli_connection_error());
}

$sql = "CREATE DATABASE IF NOT EXIST $dbName";

if (!mysqli_query($link, $sql)) {
  echo "Database creation failed";
}

mysqli_close($link);
$link = mysqli_connect($servername, $username, $password, $dbName);

$sql = "CREATE TABLE IF NOT EXISTS users(
  id  INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL,
  pass VARCHAR(50) NOT NULL
)";

if(!mysqli_query($link, $sql)) {
  echo "Users table creation failed";
}

$sql = "CREATE TABLE IF NOT EXISTS users(
  id  INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL,
  pass VARCHAR(50) NOT NULL
)";

if(!mysqli_query($link, $sql)) {
  echo "Users table creation failed";
}

mysqli_close($link);
?>