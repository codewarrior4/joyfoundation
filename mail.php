<?php
if (isset($_POST['mail']))
{
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $recipient = 'info@joygiverscharity.com';
    $message = '<html><body>';
    $message .= '<img src="//css-tricks.com/examples/WebsiteChangeRequestForm/images/wcrf-header.png" alt="Website Change Request" />';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td colspan='2'><strong>Contact us Message:</strong> </td></tr>";
    $message .= "<tr><td><strong>name:</strong> </td><td>" . $name . "</td></tr>";
    $message .= "<tr><td><strong>email:</strong> </td><td>" . $email . "</td></tr>";
    $message .= "<tr><td><strong>phone:</strong> </td><td>" . $phone . "</td></tr>";
    $message .= "<tr><td><strong>message:</strong> </td><td>" . $message . "</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";

    $headers = "From: " . $recipient . "\r\n";
    $headers .= "Reply-To: ". $recipient. "\r\n";
    $headers .= "CC: info@joygiverscharity.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


    mail($recipient,$subject,$message, $headers);
    header("location: contact.php?sent");
}

