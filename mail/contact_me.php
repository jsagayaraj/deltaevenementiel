<?php

if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone']) ||
   empty($_POST['evenement']) ||
   empty($_POST['message']) ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
  echo "No arguments Provided!";
  return false;
   }
  
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$evenement = $_POST['evenement'];
$message = $_POST['message'];
  
// Create the email and send the message
$to = 'conte.sophie@hotmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nEvenement:$evenement\n\nMessage:\n$message";
$headers = "From: noreply@deltaevenementiel.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address"; 
mail($to,$email_subject,$email_body,$headers);
return true;
//  if($_POST) {
//       $name = trim(stripslashes($_POST['name']));
//       $email = trim(stripslashes($_POST['email']));
//       // $subject = trim(stripslashes($_POST['contactSubject']));
//       $phone = trim(stripslashes($_POST['phone']));
//       $evenement = trim(stripslashes($_POST['evenement']));
//       $message = trim(stripslashes($_POST['message']));
//       $error = array();

//       // Check Name
//       if (strlen($name) < 2) {
//          $error['name'] = "Please enter your name.";
//       }
//       // Check Email
//       if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
//          $error['email'] = "Please enter a valid email address.";
//       }


//     if ( empty($error) ) {
//       $name = $_POST['name'];
//       $email_address = $_POST['email'];
//       $phone = $_POST['phone'];
//       $evenetment = $_POST['evenetment'];
//       $message = $_POST['message'];
         
//       // Create the email and send the message
//       $to = 'bjsahay@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
//       $email_subject = "Website Contact Form:  $name";
//       $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\n Télephone:$phone\n\nEvenetment:$evenetment\n\nMessage:\n$message";
//       $headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
//       $headers .= "Reply-To: $email_address";   
//       mail($to,$email_subject,$email_body,$headers);
//       return true;   

//     } # end if - no validation error

//     else {

//        echo json_encode($error);

//    } # end else - there was a validation error

// }
		
?>