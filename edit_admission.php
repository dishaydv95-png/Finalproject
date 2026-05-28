<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "collage_db");

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM admission WHERE id=$id");

$row = mysqli_fetch_assoc($result);

?>
<!doctype html>
<html>
<head>
    <title>Edit Admission</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	
	<style>
	   body{
		   background: #f4f6f9;
	   }
	   .form-container {
		   max-width:700px;
		   margin: 50px auto;
	   }
	   .card{
		   border-radius: 15px;
	   }
	</style>
</head>
<body>
<div class="form-container" data-aos="fade-up">
    <div class="card shadow p-4">
        <h2 class="text-center mb-4" data-aos="fade-down">Edit Admission Form</h2>

        <form method="post" action="update_admission.php">
		  
            <div class="row">
             <input type="hidden" name="id" value="<?php echo $row ['id']; ?>">
			 
                <!-- Name -->
                <div class="col-md-6 mb-3"  data-aos="fade-right">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $row ['name']; ?>" placeholder="Enter your name" required>
                </div>

                <!-- Email -->
                <div class="col-md-6 mb-3"  data-aos="fade-left">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $row ['email']; ?>"  placeholder="Enter your email" required>
                </div>

                <!-- Phone -->
                <div class="col-md-6 mb-3"  data-aos="fade-right">
                    <label>Phone Number</label>
                    <input type="tel" pattern="[0-9]{10}" class="form-control" name="phone" value="<?php echo $row ['phone']; ?>" placeholder="Enter your phone number" required>
                </div>

                <!-- Course -->
                <div class="col-md-6 mb-3"  data-aos="fade-left"  required>
                    <label>Select Course</label>
                    <select class="form-control" name="course" value="<?php echo $row ['course']; ?>">
                        <option>BCA</option>
                        <option>B.Com</option>
                        <option>BBA</option>
                        <option>DCA</option>
                        <option>Excel & Data Analysis</option>
                        <option>Tally with GST</option>
                    </select>
                </div>

                <!-- Qualification -->
                <div class="col-md-6 mb-3"  data-aos="fade-right" required>
                    <label>Highest Qualification</label>
                    <input type="text" class="form-control" name="qualification" value="<?php echo $row ['qualification']; ?>" placeholder="e.g. 12th Pass">
                </div>

                <!-- Address -->
                <div class="col-md-6 mb-3"  data-aos="fade-left" required>
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" value="<?php echo $row ['address']; ?>" placeholder="Enter your address">
                </div>

                <!-- Message -->
                <div class="col-12 mb-3"  data-aos="fade-up">
                    <label>Additional Message</label>
                    <textarea class="form-control" name="message"  rows="3"><?php echo $row ['message']; ?></textarea>
                </div>

            </div>

            <!-- Submit Button -->
            <div class="text-center"  data-aos="zoom-in">
                <button type="submit" class="btn btn-primary px-5">Update</button>
				<a href="view_admission.php" class="btn btn-secondary px-4">Cancel</a>
            </div>

        </form>
    </div>
</div>
</body>
</html>