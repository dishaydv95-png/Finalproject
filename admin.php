<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: #f4f6f9;
        }

        /* Sidebar */
        .sidebar {
            width: 240px;
            height: 100vh;
            background: #1f2d3d;
            color: white;
            position: fixed;
            padding: 20px;
        }

        .sidebar h4 {
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar a {
            display: block;
            color: #cfd8dc;
            padding: 12px;
            text-decoration: none;
            border-radius: 6px;
            margin-bottom: 8px;
        }

        .sidebar a:hover {
            background: #0d6efd;
            color: white;
        }

        .sidebar .active {
            background: #0d6efd;
        }

        /* Main */
        .main {
            margin-left: 240px;
        }

        /* Topbar */
        .topbar {
            background: white;
            padding: 15px 25px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .topbar h5 {
            margin: 0;
        }

        /* Cards */
        .card-box {
            border-radius: 12px;
            transition: 0.3s;
        }

        .card-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .icon-box {
            font-size: 30px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

<!-- Sidebar -->
<div class="sidebar">
    <h4>Admin Panel</h4>

    <a href="admin_dashboard.php" class="active"><i class="fas fa-home"></i> Dashboard</a>
    <a href="view_enquiry.php"><i class="fas fa-envelope"></i> Enquiry</a>
    <a href="view_admission.php"><i class="fas fa-user-graduate"></i> Admission</a>
    <a href="view_feedback.php"><i class="fas fa-star"></i> Feedback</a>
    <a href="news_view.php"><i class="fas fa-newspaper"></i> News</a>
    <a href="news_form.html"><i class="fas fa-plus"></i> Add News</a>

    <hr style="border-color:#555;">

    <a href="Home.php"><i class="fas fa-globe"></i> Go Website</a>
    <a href="Home.php" style="color:#ff6b6b;"><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>

<!-- Main Content -->
<div class="main">

    <!-- Topbar -->
    <div class="topbar">
        <h5>Welcome Admin 👋</h5>
        <span>Admin Dashboard</span>
    </div>

    <!-- Dashboard -->
    <div class="container mt-4">

        <h2 class="text-center mb-4">Dashboard Overview</h2>

        <div class="row g-4">

            <!-- Enquiry -->
            <div class="col-md-4">
                <div class="card card-box text-center p-4 shadow">
                    <div class="icon-box text-primary">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h5>Enquiry Records</h5>
                    <p>Manage enquiries</p>
                    <a href="view_enquiry.php" class="btn btn-primary">View</a>
                </div>
            </div>

            <!-- Admission -->
            <div class="col-md-4">
                <div class="card card-box text-center p-4 shadow">
                    <div class="icon-box text-success">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h5>Admission Records</h5>
                    <p>Manage admissions</p>
                    <a href="view_admission.php" class="btn btn-success">View</a>
                </div>
            </div>

            <!-- Feedback -->
            <div class="col-md-4">
                <div class="card card-box text-center p-4 shadow">
                    <div class="icon-box text-warning">
                        <i class="fas fa-star"></i>
                    </div>
                    <h5>Feedback Records</h5>
                    <p>View feedback</p>
                    <a href="view_feedback.php" class="btn btn-warning">View</a>
                </div>
            </div>

            <!-- News -->
            <div class="col-md-4">
                <div class="card card-box text-center p-4 shadow">
                    <div class="icon-box text-danger">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <h5>News</h5>
                    <p>View all news</p>
                    <a href="news_view.php" class="btn btn-danger">View</a>
                </div>
            </div>

			<!-- Add News -->
            <div class="col-md-4">
                <div class="card card-box text-center p-4 shadow">
                    <div class="icon-box text-primary">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <h5>Add News</h5>
                    <p>Add latest news</p>
                    <a href="news_form.html" class="btn btn-primary">View</a>
                </div>
            </div>
			
            <!-- Website -->
            <div class="col-md-4">
                <div class="card card-box text-center p-4 shadow">
                    <div class="icon-box text-dark">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h5>Visit Website</h5>
                    <p>Go to frontend</p>
                    <a href="Home.php" class="btn btn-dark">Open</a>
                </div>
            </div>

        </div>

    </div>

</div>

</body>
</html>