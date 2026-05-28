<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "collage_db");

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM feedback WHERE id=$id");

header("Location: view_feedback.php");
?>