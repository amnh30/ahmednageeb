<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Prepare the content to be saved
    $content = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message\n\n";

    // Define the file path
    $file = 'message.txt';

    // Save to the file
    if (file_put_contents($file, $content, FILE_APPEND | LOCK_EX) !== false) {
        echo "Your message has been sent. Thank you!";
    } else {
        echo "Error saving message. Please try again.";
    }
}
?>
