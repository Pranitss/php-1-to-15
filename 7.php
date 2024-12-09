<!-- 7. Design the personal information form, submit and retrieve the form data using php     
$_POST, $_GET, $ REQUEST variable.   -->

HTML File: - 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Personal Information Form</title> 
</head> 
<body> 
<h2>Personal Information Form</h2> 
<form action="process_form.php" method="post"> 
<label for="name">Name:</label> 
<input type="text" name="name" required><br> 
<label for="email">Email:</label> 
<input type="email" name="email" required><br> 
<label for="age">Age:</label> 
<input type="number" name="age" required><br> 
<input type="submit" value="Submit"> 
</form> 
</body> 
</html> 
PHP File: - 
<!DOCTYPE html> 
<head> 
<title>Process Form</title> 
</head> 
<body> 
<?php 
// PHP code to process the form data 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
// Using $_POST to retrieve form data 
$name = $_POST["name"]; 
$email = $_POST["email"]; 
$age = $_POST["age"]; 
// Displaying the submitted data 
echo "<h2>Submitted Data using \$_POST:</h2>"; 
echo "Name: $name<br>"; 
echo "Email: $email<br>"; 
echo "Age: $age<br>"; 
} 
// Using $_GET to retrieve form data 
if (isset($_GET["name"]) && isset($_GET["email"]) && isset($_GET["age"])) { 
$name_get = $_GET["name"]; 
$email_get = $_GET["email"]; 
$age_get = $_GET["age"]; 
// Displaying the submitted data 
echo "<h2>Submitted Data using \$_GET:</h2>"; 
echo "Name: $name_get<br>"; 
echo "Email: $email_get<br>"; 
echo "Age: $age_get<br>"; 
} 
// Using $_REQUEST to retrieve form data 
if (isset($_REQUEST["name"]) && isset($_REQUEST["email"]) && isset($_REQUEST["age"])) { 
$name_request = $_REQUEST["name"]; 
$email_request = $_REQUEST["email"]; 
$age_request = $_REQUEST["age"]; 
// Displaying the submitted data 
echo "<h2>Submitted Data using \$_REQUEST:</h2>"; 
echo "Name: $name_request<br>"; 
echo "Email: $email_request<br>"; 
echo "Age: $age_request<br>"; 
} 
?> 
</body> 
</html>

