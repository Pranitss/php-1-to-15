<!-- 8. Study of Cookies and Session in PHP. -->
 
<!-- Session 1 -->
<!DOCTYPE html> 
<head> 
<title>Session 1</title> 
</head> 
<body> 
<?php 
// Setting a cookie 
$cookie_name = "user"; 
$cookie_value = "John Doe"; 
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // Cookie will expire in 30 days 
// Retrieving and displaying cookie value 
if (isset($_COOKIE[$cookie_name])) { 
echo "Cookie '" . $cookie_name . "' has the value: " . $_COOKIE[$cookie_name]; 
} else { 
echo "Cookie named '" . $cookie_name . "' is not set."; 
} 
?> 
</body> 
</html>

<!-- Session 2 -->
<!DOCTYPE html> 
<head> 
<title>Session 2</title> 
</head> 
<body> 
<?php 
// Starting a session 
session_start(); 
// Setting session variables 
$_SESSION["username"] = "JohnDoe"; 
$_SESSION["user_id"] = 123; 
// Retrieving and displaying session variables 
echo "Username: " . $_SESSION["username"] . "<br>"; 
echo "User ID: " . $_SESSION["user_id"] . "<br>"; 
// Destroying the session 
session_destroy(); 
?> 
</body> 
</html>
