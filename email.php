<?php
if (isset($_POST['button'])) {

  // Email information
  $admin_email = "amritpreets96@gmail.com";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Send email
  mail($name, $email, $message, "From:" . $email);

  // Redirect to thank you page
  header('Location: thanks.html');
}
?>