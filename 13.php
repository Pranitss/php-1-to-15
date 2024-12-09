13.	Design a from which upload & Display image in PHP 

 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Image Upload Form</title> 
</head> 
<body> 
<h2>Image Upload Form</h2> 
<form action="upload_image.php" method="post" enctype="multipart/form-data"> 
<label for="image">Select Image:</label> 
<input type="file" name="image" accept="image/*" required><br> 
<input type="submit" value="Upload Image"> 
</form> 
</body> 
</html>
<!DOCTYPE html> 
<head> 
<title>Uploed Image</title> 
</head> 
<body> 
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
if (isset($_FILES["image"])) { 
$uploadDir = "C:\Users\kumar\Pictures\Camera Roll"; // Directory to store uploaded images 
$fileName = $_FILES["image"]["name"]; 
$fileTmpName = $_FILES["image"]["tmp_name"]; 
$fileType = $_FILES["image"]["type"]; 
$fileSize = $_FILES["image"]["size"]; 
$fileError = $_FILES["image"]["error"]; 
$uniqueFileName = uniqid() . "_" . $fileName; 
if (move_uploaded_file($fileTmpName, $uploadDir . $uniqueFileName)) { 
echo "Image uploaded successfully.<br>"; 
echo "<h2>Uploaded Image:</h2>"; 
echo "<img src='$uploadDir$uniqueFileName' alt='Uploaded Image'>"; 
} else { 
echo "Error uploading image: " . $fileError; 
} 
} else { 
echo "No file selected."; 
} 
} else { 
header("C:\xampp\htdocs\MCA PHP Practicals\Practical_13\image_upload_form.html"); 
exit(); 
}?></body></html>
