<?php
if (isset($_POST['submit'])) {
  $to = 'syfonisaac@gmail.com'; // Replace with your email address
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $headers = "From: $name <$email>" . "\r\n";
  $headers .= "Reply-To: $email" . "\r\n";
  $headers .= "Content-type: text/html" . "\r\n";

  mail($to, $subject, $message, $headers);
  echo "success"; // You can send a response to your JavaScript code
} else {
  echo "error"; // You can send an error response if needed
}
?>
