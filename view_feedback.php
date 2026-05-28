<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "collage_db");

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$result = mysqli_query($conn, "SELECT * FROM feedback");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Feedback Records</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	
	<style>
	   body{
		   background: #f4f6f9;
	   }
	   .table-container{
		   margin-top: 50px;
	   }
	</style>
</head>
<body>

<!--Include sidebar-->
<?php include("admin_sidebar.php");?>

<!--Main Content-->
<div class="main-content">

<div class="container table-container">
  <h5 class="text-center mb-4">Student Feedback</h2>
  
  <table class="table table-bordered table-striped shadow">
     <thead class="table-dark">
	    <tr>
		  <th>ID</th>
		  <th>Name</th>
		  <th>Email</th>
		  <th>Rating</th>
		  <th>Meesage</th>
		  <th>Date</th>
		  <th>Action</th>
		</tr>
	</thead>
	
	<tbody>
	<?php while($row = mysqli_fetch_assoc($result)) { ?>
	 <tr>
	    <td><?php echo $row['id'];?></td>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['email'];?></td>
		
		<!-- ⭐ Rating-->
		<td>
		  <?php 
                $rating = $row['rating'];
		        for($i=1; $i<=5; $i++){
					if($i <= $rating){
						echo "⭐";
					}else{
						echo "☆";
					}
				}
			?>
		</td>
		
		
		
		<td><?php echo $row['message']; ?></td>
		<td><?php echo $row['created_at']; ?></td>
		
		<td>
		   <a href="delete_feedback.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"
		     onclick="return confirm('Delete this Feedback?')">Delete</a>
		</td>
		
		</tr>
	<?php } ?>
	</tbody>
  </table>
 </div>

</body>
</html>
		   
		
	   
		
		
		
		
		  
