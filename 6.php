
<!-- 6.	Write a program In PHP to Sort an array using Bubble Sort function. -->

<!DOCTYPE html>                                                                  
<head>                                                                                     
<title>Bubble Short Function</title>                               
</head>                                                                             
<body>                                                                           
<?php                                                                                     
// PHP program to sort an array using Bubble Sort        
function bubbleSort(&$arr)                                                 
{                                                                                                  
$n = count($arr); 
for ($i = 0; $i < $n - 1; $i++)                                                    
{                                                                                                    
for ($j = 0; $j < $n - $i - 1; $j++)                                              
 {                                                                                                    
if ($arr[$j] > $arr[$j + 1])                                                        
                                                                                                 
 { 
      $temp = $arr[$j]; 
      $arr [$j] = $arr [$j + 1];  
      $arr[$j + 1] = $temp;
 }
}
}
}
// Example usage
$arrayToSort = [64, 34, 25, 12, 22, 11, 90];
echo "Original Array: " . implode(", ",
$arrayToSort) . "\n";
// Call the bubbleSort function to sort the array
bubbleSort($arrayToSort);
echo "Sorted Array: " . implode(", ",
$arrayToSort) . "\n";
?>
</body>
</html>