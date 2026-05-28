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
   $phone = $_POST['phone'] ?? '';
   $course = $_POST['course'] ?? '';
   $mode = $_POST['mode'] ?? '';
   $message = $_POST['message'] ?? '';
   
   //Insert query
   $sql = "INSERT INTO enquiry (name, email, phone, course, mode, message) VALUES ('$name', '$email', '$phone','$course', '$mode', '$message')";
   
   if (mysqli_query($conn, $sql)) 
   {
?>
  <!doctype html>
  <html>
  <head>
      <title>Success</title>
	  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	</head>
	<body>
	
	<script>
	   Swal.fire({
		   title: 'Success!',
		   text: 'Your enquiry has been submitted successfully.',
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