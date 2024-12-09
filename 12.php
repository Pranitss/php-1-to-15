12.	Write a PHP code to insert ,delete,select the data from database 

 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Database- Insert, Delete</title> 
</head> 
<body> 
<?php 
// Database connection parameters 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "Kumardatabase"; 
$conn = new mysqli($servername, $username, $password, $database); 
if ($conn->connect_error) { 
die("Connection failed: " . $conn->connect_error); 
} 
$insertSql = "INSERT INTO users (username, email) VALUES ('john_doe', 'john@example.com')"; 
if ($conn->query($insertSql) === TRUE) { 
echo "Data inserted successfully.<br>"; 
} else { 
echo "Error inserting data: " . $conn->error . "<br>"; 
} 
// Delete data from the database 
$deleteSql = "DELETE FROM users WHERE username='john_doe'"; 
if ($conn->query($deleteSql) === TRUE) { 
echo "Data deleted successfully.<br>"; 
} else { 
echo "Error deleting data: " . $conn->error . "<br>"; 
} 
// Select data from the database 
$selectSql = "SELECT * FROM users"; 
$result = $conn->query($selectSql); 
if ($result->num_rows > 0) { 
echo "<h2>Users:</h2>"; 
while ($row = $result->fetch_assoc()) { 
echo "ID: " . $row["id"] . " - Username: " . $row["username"] . " - Email: " . $row["email"] . "<br>"; 
} 
} else { 
echo "No users found.<br>"; 
} 
// Close the database connection 
$conn->close(); 
?> 
</body> 
</html>
