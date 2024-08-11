<?php


if(!empty($_POST)){
	var_dump($_POST);
	if(!empty($_POST['email']) && !empty($_POST['projet'])){
		extract($_POST);
		print_r($email);
		print_r($projet);
	}
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$to = 'cartonwebdesign@gmail.com';
$subject = 'Test Mail';
$message = 'This is a test email sent from a PHP script.';
$headers = 'From: sender@example.com' . "\r\n" .
           'Reply-To: sender@example.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

// Absolute path to store email files (adjust this path as needed)
// $emailDir = __DIR__ . '/emails';
$emailDir = dirname(__DIR__) . '/emails';

// Create directory if it doesn't exist
if (!is_dir($emailDir)) {
    mkdir($emailDir, 0777, true);
}

// Generate a unique filename
// $filename = $emailDir . '/email_' . time() . '.txt';
$filename = $emailDir . '/' . date('d_F_Y_H\hi_s\s') . '.txt';

// Email content
// $emailContent = "To: $to\nSubject: $subject\nHeaders: $headers\n\n$message";
$emailContent = "De: $email\nProjet: $projet\n";

// Write email content to file
if (file_put_contents($filename, $emailContent)) {
    echo 'Email written to file successfully.';
} else {
    echo 'Failed to write email to file.';
}
?>