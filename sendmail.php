<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
	$contact = $_POST['contact'] ?? '';
    $message = $_POST['message'] ?? '';

    // =========================
    // 1️⃣ SEND EMAIL TO ADMIN
    // =========================
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'dishaydv95@gmail.com';
        $mail->Password   = 'fwnvjnjahcxsflto';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('dishaydv95@gmail.com', 'Website Enquiry');
        $mail->addAddress('dishaydv95@gmail.com'); // Admin email

        $mail->isHTML(true);
        $mail->Subject = 'New Enquiry Message';

        $mail->Body = "
            <b>Name:</b> $name <br>
            <b>Email:</b> $email <br>
			<b>Contact Number:</b> $contact <br>
            <b>Message:</b> $message
        ";

        $mail->send();

        // =========================
        // 2️⃣ AUTO-REPLY TO USER
        // =========================
        $mail->clearAddresses(); // clear previous email

        $mail->addAddress($email); // send to user
        $mail->Subject = "Thank You for Contacting Us";

        $mail->Body = "
            Dear $name,<br><br>
            Thank you for contacting us. We have received your message and will get back to you soon.<br><br>

            <b>Your Message:</b><br>
            $message<br><br>

            Regards,<br>
            ICMS College, Dehradun
        ";

        $mail->send();

        echo "<script>
				alert('✅ Message Sent Successfully! Confirmation email has been sent.');
				window.location.href = 'home.html'; // your home page
			</script>";
    } 
	catch (Exception $e) 
	{
        echo "Error: {$mail->ErrorInfo}";
    }
}
?>