<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
 




$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$message = strip_tags(htmlspecialchars($_POST['message']));
$phone = "";

include('server.php');


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO contact (name, email,message)
VALUES ('".$name."', '".$email_address."','".$message."' )";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


   
$to = 'amrsamo75@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
// mail($to,$email_subject,$email_body,$headers);








//GMAIL SCRIPT
require 'phpmailer/PHPMailerAutoload.php';

$email = 'amrsamo75@gmail.com';                    
$password = 'zamalek_1989';
$to_id = 'amrsamo75@gmail.com';
$message = $email_body;
$subject = $email_subject;

$mail = new PHPMailer;

$mail->isSMTP();

$mail->Host = 'smtp.gmail.com';

$mail->Port = 587;

$mail->SMTPSecure = 'tls';

$mail->SMTPAuth = true;

$mail->Username = $email;

$mail->Password = $password;

$mail->setFrom('from@example.com', 'AmrFotography');

$mail->addReplyTo('replyto@example.com', 'First Last');

$mail->addAddress($to_id);

$mail->Subject = $subject;

$mail->msgHTML($message);

if (!$mail->send()) {
   $error = "Mailer Error: " . $mail->ErrorInfo;
   echo $error;
} 
else {
   echo 'yes';
}



return true;         
?>
