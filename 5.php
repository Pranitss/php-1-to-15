<!-- 5. Write a program in PHP to display Multiplication Table using nested for loop.  -->

<!DOCTYPE html> 
<head> 
<title>Multiplication Table</title> 
</head> 
<body> 
<?php 
// PHP program to display multiplication table 
// Define the range of the multiplication table 
$start = 1; 
$end = 10; 
// Display the multiplication table using nested for loops 
for ($i = $start; $i <= $end; $i++)
 { 
for ($j = 1; $j <= 10; $j++) 
{ 
$result = $i * $j; 
echo "$i x $j = $result\n"; 
} 
echo "\n"; // Add a newline after each row for better readability 
} 
?> 
</body> 
</html>

