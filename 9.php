<!-- 9.	Study of MySQL DDL, DML, DCL Commands.  -->

DDL
<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Database Table Create</title>
</head>
<body>
<?php
// DDL Example: Creating a Table
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "KumarDatabase";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE TABLE users (
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

DML
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Insert Data in DataBase</title>
</head>
<body>
<?php
// DML Example: Inserting Data
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Kumardatabase";
$conn = new mysqli($servername, $username, $password, $dbname)
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO users (username, email)
VALUES ('john_doe', 'john@example.com')";
if ($conn->query($sql) === TRUE) {
echo "Data inserted successfully";
} else {
echo "Error inserting data: " . $conn->error;
}
$conn->close();
?>
</body>
</html>


DCL 
<!DOCTYPE html> 
<head> 
<title>Grant Privileges</title> 
</head> 
<body> 
<?php 
// DCL Example: Granting Privileges 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "Kumardatabase"; 
$conn = new mysqli($servername, $username, $password, $dbname); 
if ($conn->connect_error) { 
die("Connection failed: " . $conn->connect_error); 
} 
$sql = "GRANT SELECT, INSERT, UPDATE, DELETE ON Kumardatabse.users TO 'new_user'@'localhost'"; 
if ($conn->query($sql) === TRUE) { 
echo "Privileges granted successfully"; 
} else { 
echo "Error granting privileges: " . $conn->error; 
} 
$conn->close(); 
?> 
</body> 
</html>
