<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "collage_db");

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$id = $_GET['id'];

// Get image name first (to delete file)
$result = mysqli_query($conn, "SELECT image FROM news WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if($row && $row['image']) {
   $filePath = "uploads/" . $row['image'];
   
   //delete image file 
   if (file_exists($filePath)) {
     unlink($filePath);
	 }
	}
	
	// Delete record from db
mysqli_query($conn, "DELETE FROM news WHERE id=$id");

// redirect back
header("location: news_view.php");
exit();
?>
