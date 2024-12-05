<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dibyadb";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

// Create a table in the db
$sql = "CREATE TABLE `categories` (`id` INT NOT NULL , `name` VARCHAR(11) NOT NULL , `description` VARCHAR(30) NOT NULL , `created` DATETIME NOT NULL , `last updated` DATETIME NOT NULL )";
$result = mysqli_query($conn, $sql);

$sql1 = "CREATE TABLE `services` (`id` INT(11) NOT NULL , `name` VARCHAR(50) NOT NULL , `description` VARCHAR(1000) NOT NULL , `icon_image` VARCHAR(100) NOT NULL , `banner_image` VARCHAR(100) NOT NULL , `page_url` VARCHAR(100) NOT NULL , `is_active` TINYINT(1) NOT NULL , `created_at` DATETIME NOT NULL , `last_updated` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP )";
$result1 =mysqli_query($conn, $sql1);

$sql2 = "CREATE TABLE `courses` (`id` INT(11) NOT NULL,`name` VARCHAR(50) NOT NULL,`description` VARCHAR(2000) NOT NULL,  `category` TINYINT(1) NOT NULL,  `course_duration` TINYINT(1) NOT NULL,`icon_image` VARCHAR(100) NOT NULL , `banner_image` VARCHAR(100) NOT NULL , `page_url` VARCHAR(100) NOT NULL , `is_active` TINYINT(1) NOT NULL , `created_at` DATETIME NOT NULL , `last_updated` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP )";
$result2 =mysqli_query($conn, $sql2);

// Check for the table creation success
if($result){
    echo "The categories table was created successfully!<br>";
}
else{
    echo "The categories table was not created successfully because of this error ---> ". mysqli_error($conn);
}
if($result1){
  echo "The  services table was created successfully!<br>";
}
else{
  echo "The services table was not created successfully because of this error ---> ". mysqli_error($conn);
}
if($result2){
  echo "The courses table was created successfully!<br>";
}
else{
  echo "The courses table was not created successfully because of this error ---> ". mysqli_error($conn);
}
  
?>
