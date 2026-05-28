<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "collage_db");

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$title = $_POST['title'];
$description = $_POST['description'];

$imageName = time(). "_" . $_FILES['image']['name']; // unique name
$tempName = $_FILES['image']['tmp_name'];

$folder = "uploads/" . $imageName;


if (move_uploaded_file($tempName, $folder))
{
   
   //Insert query
   $sql = "INSERT INTO news (title, description, image) VALUES ('$title', '$description', '$imageName')";
   
   if (mysqli_query($conn, $sql)) 
   {
   echo "<script>alert('News Added Successfully');
   window.location.href='news_view.php';</script>";
  }
  else
  {
  echo "Error: " .mysqli_error($conn);
  }

}
else{
  echo "Image Upload Failed! ";
}  
 
 ?>