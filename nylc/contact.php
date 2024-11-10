<?php
if( $_SERVER["REQUEST_METHOD"] == "POST" ) {

    $name =
    htmlspecialchars( $_POST['name']);
    $email = 
    htmlspecialchars($_POST['email']);
    $message =
    htmlspecialchars($_POST['message']);

    $to = 
    "emial@eample.com";
    $subject = "New Contact Form Submition from $name";
    $body = "Name: $name\nEmail:
    $email\nMessage:\n$message";
    $headers = "Form: $email";
}

if (mail($to, $subject, $body, $headers)) {
    echo "Message Sent Successfull";
} else{
    echo "There was an error semding your message.";
} else {
    echo " invalid request.";
}
?>

