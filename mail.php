<?php


if (isset($_POST)) {


$name = "";
$visitor_email = "";
//$contact = "";
$my_msg = "";


$name = strip_tags(htmlspecialchars($_POST['name']));
$visitor_email = strip_tags(htmlspecialchars($_POST['email']));
$my_msg = strip_tags(htmlspecialchars($_POST['message']));


// $email_from = 'admin@satishupadhyay.info';
$email_subject = "New Message";
$email_body = "You have received a new message from $name.\n\n".
   "The message goes here:\n $my_msg";

$to = "satishofcit@gmail.com";
$headers = "From: $visitor_email \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

//Send the email!
mail($to,$email_subject,$email_body,$headers);

//done.
header('Location: index.html');
//echo "well done !";

}

?>