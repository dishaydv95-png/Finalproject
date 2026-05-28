<?php
$conn = mysqli_connect("localhost", "root", "", "collage_db");

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$course = $_POST['course'];
$qualification = $_POST['qualification'];
$address = $_POST['address'];
$message = $_POST['message'];

mysqli_query($conn, "UPDATE admission
SET name='$name', email='$email', phone='$phone', course='$course', qualification='$qualification', address='$address', message='$message' WHERE id=$id");

header("Location: view_admission.php");
?>