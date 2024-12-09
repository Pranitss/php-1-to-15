<!-- 15.	Write a PHP code Insert, Delete, Update, Select the Data From Database. -->

 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Database - Insert , Update, Delete</title> 
</head> 
<body> 
<?php 
// Database connection parameters 
$hostname = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "exampledatabase"; 
// Create a connection to MySQL 
$conn = new mysqli($hostname, $username, $password, $database); 
// Check connection 
if ($conn->connect_error) { 
die("Connection failed: " . $conn->connect_error); 
} 
$insertSql = "INSERT INTO users (username, email) VALUES ('john_doe', 'john@example.com')"; 
if ($conn->query($insertSql) === TRUE) { 
echo "Data inserted successfully.<br>"; 
} else { 
echo "Error inserting data: " . $conn->error . "<br>"; 
} 
// Update data in the table 
$updateSql = "UPDATE users SET email='john_updated@example.com' WHERE username='john_doe'"; 
if ($conn->query($updateSql) === TRUE) { 
echo "Data updated successfully.<br>"; 
} else { 
echo "Error updating data: " . $conn->error . "<br>"; 
} 
// Delete data from the table 
$deleteSql = "DELETE FROM users WHERE username='john_doe'"; 
if ($conn->query($deleteSql) === TRUE) { 
echo "Data deleted successfully.<br>"; 
} else { 
echo "Error deleting data: " . $conn->error . "<br>"; 
} 
// Select data from the table 
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
