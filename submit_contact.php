<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'db.php';

// Only accept form submissions
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

// Get and clean the input
$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

// Validate
if ($name === '' || $subject === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: index.php?status=error#contact");
    exit;
}

// Prepared statement
$stmt = $conn->prepare("INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $subject, $message);

if ($stmt->execute()) {
    header("Location: index.php?status=success#contact");
} else {
    header("Location: index.php?status=error#contact");
}

$stmt->close();
$conn->close();
exit;
?>