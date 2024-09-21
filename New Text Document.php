<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $data = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message\n\n";

    // Append the data to Messages.txt
    file_put_contents('Messages.txt', $data, FILE_APPEND | LOCK_EX);

    // Redirect back to the form or display a success message
    echo "<script>alert('Your message has been sent. Thank you!'); window.location.href='index.html';</script>";
}
?>
