<!-- 3. Write a program using Looping Structure with concept of Functions.  -->
 
<!DOCTYPE html> 
<head> 
<title> Function using Looping Structure </title> 
</head> 
<body> 
<?php 
function table($n)
{
   for($i=1;$i<=10; $i++)
    {
         echo “$n*$i=”.$n*$n*$i.”<br>”;
     }
}
  table(5);
?>
