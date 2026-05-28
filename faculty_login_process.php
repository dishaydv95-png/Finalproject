<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "collage_db");

$email = $_POST['email'];
$password = $_POST['password'];

$result = mysqli_query($conn, "SELECT * FROM faculty WHERE email='$email' AND password='$password'");

if(mysqli_num_rows($result) > 0){
    $_SESSION['faculty'] = $email;
    header("Location: faculty_dashboard.php");
} else {
    echo "<script>alert('Invalid Login'); window.location='home.php';</script>";
}
?>