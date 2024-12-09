<!DOCTYPE html> 
<html> 
<body> 
 <?php 
$marks = 75;
if ($marks > 79)
{
echo "A";
}
elseif ($marks <= 79 && $marks > 60)
{
echo "B";
}
elseif ($marks <= 60 && $marks > 50)
{
echo "C";
}
elseif ($marks == 50)
{
echo "D";
}
else
{
echo "F";
}
  ?> 
</body> 
</html>
