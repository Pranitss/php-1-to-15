14.	Write a PHP Code to make database connection, Create Data Base, Create Table In Mysql.

 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Database & Table Create</title> 
</head> 
<body> 
<?php 
$hostname = "localhost"; 
$username = "root"; 
$password = ""; 
$conn = new mysqli($hostname, $username, $password); 
if ($conn->connect_error) { 
die("Connection failed: " . $conn->connect_error); 
} 
$databaseName = "exampledatabase"; 
$createDatabaseSql = "CREATE DATABASE IF NOT EXISTS $databaseName"; 
if ($conn->query($createDatabaseSql) === TRUE) { 
echo "Database created successfully.<br>"; 
} else { 
    echo "Error creating database: " . $conn->error . "<br>"; 
    } 
    $conn->select_db($databaseName); 
    $createTableSql = "CREATE TABLE IF NOT EXISTS users ( 
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    username VARCHAR(30) NOT NULL, 
    email VARCHAR(50) NOT NULL, 
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP 
    )"; 
    if ($conn->query($createTableSql) === TRUE) { 
    echo "Table created successfully.<br>"; 
    } else { 
    echo "Error creating table: " . $conn->error . "<br>"; } 
    $conn->close(); 
    ?> 
    </body> 
    </html>
    