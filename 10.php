10.	Design Login Form and Validate that form using PHP Code.

 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Validate Login Form</title>
</head>
<body>
<h2>Login Form</h2>
<form action="p8Validate.php" method="post">
<label for="username">Username:</label>
<input type="text" name="username" required><br>
<label for="password">Password:</label>
<input type="password" name="password" required><br>
<input type="submit" value="Login">
</form>
</body>
</html>
<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Validate Login</title>
</head>
<body>
<?php
// PHP code to validate the login form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Get form data
$username = $_POST["username"];
$password = $_POST["password"];
// Hard-coded username and password for demonstration purposes
$valid_username = "user123";
$valid_password = "password123";
// Validate the login credentials
if ($username == $valid_username && $password == $valid_password) {
echo "Login successful! Welcome, $username.";
} else {
echo "Invalid username or password. Please try again."; 
}
} else {
header("C:\xampp\htdocs\pra\p8.php");
exit();
}
?>
</body>
</html> 
