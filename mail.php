
<?php
//get data from form
$name = $_POST['name'];
$email = $_POST['email'];
$phone= $_POST['phone']
$message = $_POST['message'];
$to = "ayusha.pokharel30@gmail.com";
$subject = "Contact Form";
$header = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . "_" <a href='index.html' style='text-decoration:none;color:#ff0099;'</a>
?>