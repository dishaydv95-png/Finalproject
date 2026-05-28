<?php
session_start();

// Hardcoded login (simple)
$username = $_POST['username'];
$password = $_POST['password'];

// Change these credentials
$admin_user = "Admin";
$admin_pass = "Admin";

if ($username == $admin_user && $password == $admin_pass) 
{
  
  $_SESSION['admin'] = $username;
  
  header("Location: admin.php");
  exit();
  
} else {
        echo "
        <script>
            alert('Invalid Username or Password');
            window.location.href='Home.php';
        </script>
        ";
    }

?>
