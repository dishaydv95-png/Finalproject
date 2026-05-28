<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "collage_db");

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$result = mysqli_query($conn, "SELECT * FROM enquiry");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Enquiry Records</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	
	<style>
	  body{
		  margin:0;
	  }
	  
	  /* Sidebar */
	  .sidebar{
		  width: 230px;
		  height: 100vh;
		  position: fixed;
		  background: #212529;
		  padding-top: 20px;
	  }
	  
	  .sidebar a{
		  display: block;
		  color: #ccc;
		  padding: 12px 20px;
		  text-decoration: none;
	  }
	  
	  .sidebar a:hover{
		  background: #0d6efd;
		  color: #fff;
	  }
	  
	  .sidebar h4{
		  color: white;
		  text-align: center;
		  margin-bottom: 20px;
	  }
	   
	   /* Content */
	   .main-content {
		   margin-left: 230px;
		   padding: 20px;
	   }
	  
	</style>
</head>

<body>

<!--Sidebar-->
<div class="sidebar">
   <h4>Admin Panel</h4>
   
   <a href="admin_dashboard.php">🏠 Dashboard</a>
    <a href="view_enquiry.php">📩 Enquiry</a>
	 <a href="view_admission.php">🎓 Admission</a>
	<a href="view_feedback.php">⭐ Feedback</a>
	<a href="news_view.php">📰 News</a>
	
	<hr style="border-top: 1px solid #555;">
	
	<a href="home.html">🌐 Go Website</a>
	<a href="logout.php" style="color :#ff6b6b;">🚪 Logout</a>
</div><!-- end of sidebar container-->

<!--main content-->
<div class="main-content">
	    
   
<div class="container mt-5">
  <h5 class="text-center mb-4">Enquiry Records</h2>
  
  <table class="table table-bordered table-striped">
     <thead class="table-dark">
	    <tr>
		  <th>ID</th>
		  <th>Name</th>
		  <th>Email</th>
		  <th>Phone</th>
		  <th>Course</th>
		  <th>Mode</th>
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
		<td><?php echo $row['mode'];?></td>
		<td><?php echo $row['message'];?></td>
		
		<td>
		   <a href="delete_enquiry.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"
		     onclick="return confirm('Are you sure you waant to delete this record?')">Delete</a>
		</td>
		
		</tr>
	<?php } ?>
	</tbody>
	
  </table>
 </div>

</body>
</html>
		   
		
	   
		
		
		
		
		  
