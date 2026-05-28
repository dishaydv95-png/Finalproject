<?php
$conn = mysqli_connect("localhost", "root", "", "collage_db");

$id = $_GET['id'];

// Get file name
$result = mysqli_query($conn, "SELECT file FROM notes WHERE id=$id");
$row = mysqli_fetch_assoc($result);

// Delete file from folder
unlink("uploads/" . $row['file']);

// Delete from DB
mysqli_query($conn, "DELETE FROM notes WHERE id=$id");

header("Location: view_notes.php");
?>