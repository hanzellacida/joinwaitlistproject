<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $to = 'googleads@zeldigital.com';
    $subject = 'New Waitlist Submission';
    $message = "Name: $name\nEmail: $email";
    $headers = 'From: noreply@zeldigital.com' . "\r\n" .
               'Reply-To: noreply@zeldigital.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo 'Thank you for joining our waitlist!';
    } else {
        echo 'Sorry, there was an error. Please try again later.';
    }
} else {
    echo 'Invalid request method';
}
?>
