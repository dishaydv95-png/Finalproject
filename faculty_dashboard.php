<?php
session_start();
if(!isset($_SESSION['faculty'])){
    header("Location: faculty_login.php");
}
$conn = mysqli_connect("localhost", "root", "", "collage_db");

if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
$result = mysqli_query($conn, "SELECT COUNT(*) as total FROM notes");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Faculty Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6f9;
        }

        /* MAIN CONTENT */
        .main {
            margin-left: 240px;
            padding: 20px;
        }

        /* TOPBAR */
        .topbar {
            background: white;
            padding: 15px 25px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* CARDS */
        .card-box {
            border-radius: 12px;
            transition: 0.3s;
        }

        .card-box:hover {
            transform: translateY(-6px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .icon-box {
            font-size: 30px;
            margin-bottom: 10px;
        }
    </style>
	
</head>

<body>

<?php include("sidebar.php"); ?>

<div class="main">

    <!-- TOPBAR -->
    <div class="topbar mb-4">
        <h5>Welcome, <?php echo $_SESSION['faculty']; ?> 👋</h5>
        <a href="Home.php" class="btn btn-danger btn-sm">Logout</a>
    </div>

    <!-- DASHBOARD TITLE -->
    <h3 class="mb-4">Faculty Dashboard</h3>

    <div class="row g-4">

        <!-- Upload Notes -->
        <div class="col-md-4">
            <div class="card card-box text-center p-4 shadow">
                <div class="icon-box text-primary">
                    <i class="fas fa-upload"></i>
                </div>
                <h5>Upload Notes</h5>
                <p>Add study material for students</p>
                <a href="upload_notes.php" class="btn btn-primary btn-sm">Open</a>
            </div>
        </div>

        <!-- View Notes -->
        <div class="col-md-4">
            <div class="card card-box text-center p-4 shadow">
                <div class="icon-box text-success">
                    <i class="fas fa-book"></i>
                </div>
                <h5>View Notes</h5>
                <p>Manage uploaded notes</p>
                <a href="view_notes.php" class="btn btn-success btn-sm">Open</a>
            </div>
        </div>

		<!-- count Notes -->
        <div class="col-md-4">
            <div class="card card-box text-center p-4 shadow">
                <div class="icon-box text-warning">
                    <i class="fas fa-book"></i>
                </div>
                <h5>Total Notes</h5>
                <p>Total notes uploaded <?php echo $row['total']; ?></p>
                <a href="view_notes.php" class="btn btn-warning btn-sm">Open</a>
            </div>
        </div>
		
        <!-- Student Enquiries -->
       <!-- <div class="col-md-4">
            <div class="card card-box text-center p-4 shadow">
                <div class="icon-box text-warning">
                    <i class="fas fa-envelope"></i>
                </div>
                <h5>Student Enquiries</h5>
                <p>Check student queries</p>
                <a href="view_enquiry.php" class="btn btn-warning btn-sm">Open</a>
            </div>
        </div>-->

    </div>

</div>

</body>
</html>