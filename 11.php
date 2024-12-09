11.	Write a PHP code to create database & table in Mysql 

<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Database Create</title> 
</head> 
<body> 
<?php 
// DDL Example: Creating a Table 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "RGI" 
$conn = new mysqli($servername, $username, $password, $dbname); 
if ($conn->connect_error) { 
die("Connection failed: " . $conn->connect_error); 
} 
$sql = "CREATE TABLE student ( 
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
username VARCHAR(30) NOT NULL, 
email VARCHAR(50) NOT NULL, 
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP 
)"; 
if ($conn->query($sql) === TRUE) { 
echo "Table created successfully"; 
} else { 
echo "Error creating table: " . $conn->error; 
} $conn->close(); 
?> 
</body>
</html> 

