<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "collage_db");

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$result = mysqli_query($conn, "SELECT * FROM admission");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admission</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<body>

<!--Include Sidebar-->
<?php include("admin_sidebar.php");?>

<!--Main content-->
<div class="main-content">

<div class="container mt-5">
  <h5 class="text-center mb-4">Admission Records</h2>
  
  <table class="table table-bordered table-striped">
     <thead class="table-dark">
	    <tr>
		  <th>ID</th>
		  <th>Name</th>
		  <th>Email</th>
		  <th>Phone</th>
		  <th>Course</th>
		  <th>Qualification</th>
		  <th>Address</th>
		  <th>Message</th>
		  <th>Action</th>
		</tr>
	</thead>
	
	<tbody>
	<?php while($row = mysqli_fetch_assoc($result)) { ?>
	 <tr>
	    <td><?php echo $row['id'];?></td>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['email'];?></td>
		<td><?php echo $row['phone'];?></td>
		<td><?php echo $row['course'];?></td>
		<td><?php echo $row['qualification'];?></td>
		<td><?php echo $row['address'];?></td>
		<td><?php echo $row['message'];?></td>
		
		<td>
		   <a href="edit_admission.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
		   <a href="delete_admission.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"
		     onclick="return confirm('Are you sure?')">Delete</a>
		</td>
		
		</tr>
	<?php } ?>
	</tbody>
  </table>
 </div>

</body>
</html>
		   
		
	   
		
		
		
		
		  
