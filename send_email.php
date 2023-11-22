<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $message = $_POST["message"];
  
  // Replace "your_gmail_username" and "your_gmail_password" with your actual Gmail credentials.
  $gmailUsername = "millerswoodflooring@gmail.com";
  $gmailPassword = "Erinn1018!";
  
  // Prepare the email
  $to = "millerswoodflooring@gmail.com";
  $subject = "New inquiry from $name";
  $emailMessage = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
  $headers = "From: $email";
  
  // Send the email using the PHP mail function
  if (mail($to, $subject, $emailMessage, $headers)) {
    echo "Email sent successfully!";
  } else {
    echo "Error sending email.";
  }
}
?>
