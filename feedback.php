<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "collage_db");

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   // Get form data safely
   $name = $_POST['name'] ?? '';
   $email = $_POST['email'] ?? '';
   $rating = $_POST['rating'] ?? '';
   $message = $_POST['message'] ?? '';
  
   
   //Insert query
   $sql = "INSERT INTO feedback (name, email, rating, message) VALUES ('$name', '$email', '$rating', '$message')";
    
   if (mysqli_query($conn, $sql)) 
   {
?>
  <!doctype html>
  <html>
  <head>
      <title>Feedback</title>
	  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	</head>
	<body>
	
	<script>
	   Swal.fire({
		   title: 'Success!',
		   text: 'Your feedback has been submitted successfully.',
		   icon: 'success',
		   confirmButtonText: 'OK'
	   }).then(() => {
		   window.location.href = 'Home.php';
	   });
	</script>
	
	</body>
	</html>
<?php 
   }
   else
   {
     echo "Error: " . mysqli_error($conn);
	}
 }
 mysqli_close($conn);
 ?>