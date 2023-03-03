<?php
if(isset($_POST['email'])) {
    $email_to = "Jacobnerlens@gmail.com"; // Your email address here
    $email_subject = "New subscriber"; // Email subject line

    $email_from = $_POST['email']; // Email address submitted by user

    $email_message = "New subscriber: ".$email_from;

    // Send email
    mail($email_to, $email_subject, $email_message);

    // Redirect to thank you page
    header('Location: thank-you.html');
} else {
    // Handle error
    echo "There was an error processing your request.";
}
?>