<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $to = 'peraltaignacio64@outlook.com.ar'; // Coloca aquí tu dirección de correo de Microsoft
  $headers = "From: $name <$email>";

  if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully";
  } else {
    echo "Failed to send email";
  }
}
?>
