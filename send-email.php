<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $errors = array();

    // Validate name
    if (empty($name)) {
        $errors[] = 'Please enter your name.';
    }

    // Validate email
    if (empty($email)) {
        $errors[] = 'Please enter your email address.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please enter a valid email address.';
    }

    // Validate message
    if (empty($message)) {
        $errors[] = 'Please enter a message.';
    }

    if (count($errors) === 0) {
        $to = 'youremail@example.com';
        $subject = 'New Contact Form Submission';

        $body = "Name: $name\nEmail: $email\nMessage:\n$message";

        if (mail($to, $subject, $body)) {
            echo 'Your message was sent successfully.';
        } else {
            echo 'There was an error sending your message. Please try again later.';
        }
    } else {
        echo implode('<br>', $errors);
    }
}
?>
<?php
    if(isset($_POST['submit'])){
        $to = "mutambojoe1@outlook.com"; // Replace with your email address
        $subject = "New contact form submission";
    
        // Retrieve the data submitted from the form
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
    
        // Construct the message body
        $body = "Name: $name\n\n";
        $body .= "Email: $email\n\n";
        $body .= "Message: $message\n\n";
    
        // Send the email
        if(mail($to, $subject, $body)){
            echo "Thank you for your message!";
        } else {
            echo "There was a problem sending your message.";
        }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://www.google.com/recaptcha/api.js?render=YOUR_RECAPTCHA_SITE_KEY"></script>
    <title>Send Email</title>
</head>
<body>
    
</body>
</html>