<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "collage_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get data
$title = $_POST['title'];
$course = $_POST['course'];
$faculty = $_SESSION['faculty'];

// File info
$file_name = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];
$file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

// Allowed file types
$allowed = ['pdf'];

if (!in_array($file_ext, $allowed)) {
    echo "<script>alert('Only PDF files allowed'); window.location='upload_notes.php';</script>";
    exit();
}

// Rename file
$new_name = time() . "_" . $file_name;

// Create uploads folder if not exists
$upload_dir = "uploads/";
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}

// Move file
move_uploaded_file($file_tmp, $upload_dir . $new_name);

// Insert into database
$sql = "INSERT INTO notes (title, course, file, uploaded_by)
        VALUES ('$title', '$course', '$new_name', '$faculty')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Notes Uploaded Successfully'); window.location='view_notes.php';</script>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>