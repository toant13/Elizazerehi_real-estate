
<?php
/*
$name = $_POST['firstname'] + " " + $_POST['lastname']; // contain name of person
//$lastname = $_POST['lastname']; // contain name of person
$phone = $_POST['phone']; // Email address of sender 
$email = $_POST['email']; // Email address of sender 
$subject = $_POST['subject']; // Email address of sender 
//$web = $_POST['http://www.elizazerehi.com']; // Your website URL
$body = $_POST['message']; // Your message 
$receiver = "info@elizazerehi.com" ; // hardcorde your email address here - This is the email address that all your feedbacks will be sent to /
//$receiver = "toant713@gmail.com" ; // hardcorde your email address here - This is the email address that all your feedbacks will be sent to 
if (!empty($name) && !empty($email) && !empty($subject) && !empty($subject) && !empty($body)) {
    $body = "Name:{$name}\n\Message:{$body}";
	$send = mail($receiver, $subject , $body, "From: {$email}");
    if ($send) {
        echo 'true'; //if everything is ok,always return true , else ajax submission won't work
    }

}
*/

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$name = $firstname . " " . $lastname;
$email = $_POST['email']; // Email address of sender
$subject = $_POST['subject']; 
$phone = $_POST['phone'];
//$web = $_POST['http://www.awkwardturtlemedia.com']; // Your website URL
$body = $_POST['text']; // Your message 
$receiver = "info@elizazerehi.com" ; // hardcorde your email address here - This is the email address that all your feedbacks will be sent to /
//$receiver = "toant713@gmail.com" ; // hardcorde your email address here - This is the email address that all your feedbacks will be sent to 
if (!empty($name) && !empty($phone) && !empty($email) && !empty($subject) && !empty($body)) {
    $body = "Name:{$name}\nPhone:{$phone}\n\nComments:{$body}";
	$send = mail($receiver, "Real Estate Request: {$subject}", $body, "From: {$email}");
    if ($send) {
        echo 'true'; //if everything is ok,always return true , else ajax submission won't work
    }

}

$newsname = $_POST['newsname'];
$newsemail = $_POST['newsemail']; // Email address of sender
$newsreceiver = "info@elizazerehi.com" ;
if (!empty($newsname) && !empty($newsemail)) {
    $newsbody = "Please add {$newsname} to the mailing list: {$newsemail}";
	$newssend = mail($newsreceiver, "Newsletter subscription", $newsbody, "From: {$newsemail}");
    if ($newssend) {
        echo 'true'; //if everything is ok,always return true , else ajax submission won't work
    }

}


?>

