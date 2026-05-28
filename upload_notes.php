<?php
session_start();
if(!isset($_SESSION['faculty'])){
    header("Location: faculty_login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload Notes</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6f9;
        }

        .main {
            margin-left: 240px;
            padding: 20px;
        }

        .topbar {
            background: white;
            padding: 15px 25px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
        }

        .form-card {
            background: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .form-label {
            font-weight: 600;
        }

        .file-box {
            border: 2px dashed #ccc;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s;
        }

        .file-box:hover {
            border-color: #0d6efd;
            background: #f8fbff;
        }
		.file-box {
    position: relative; 
}
    </style>
</head>

<body>

<?php include("sidebar.php"); ?>

<div class="main">

    <!-- TOPBAR -->
    <div class="topbar mb-4">
        <h5>Upload Notes 📚</h5>
        <a href="faculty_dashboard.php" class="btn btn-secondary btn-sm">Back</a>
    </div>

    <!-- FORM -->
    <div class="form-card" >

        <form method="POST" action="save_notes.php" enctype="multipart/form-data">

            <!-- Title -->
            <div class="mb-3">
                <label class="form-label">Note Title</label>
                <input type="text" name="title" class="form-control" placeholder="Enter note title" required>
            </div>

            <!-- Course -->
            <div class="mb-3">
                <label class="form-label">Select Course</label>
                <select name="course" class="form-control">
                    <option>BCA</option>
                    <option>BBA</option>
                    <option>B.Com</option>
                </select>
            </div>

            <!-- File Upload -->
            <div class="mb-3">
    <label class="form-label">Upload File</label>
    <input type="file" name="file" class="form-control" required>
</div>

            <!-- Button -->
            <button type="submit" class="btn btn-success w-100">
                <i class="fas fa-upload"></i> Upload Notes
            </button>

        </form>

    </div>

</div>

</body>
</html>