<?php

// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if required fields are present
    if (!empty($_POST['email']) && !empty($_POST['projet'])) {
        // Extract form data
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $projet = htmlspecialchars($_POST['projet']);
			
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
					echo json_encode(['status' => 'success', 'message' => 'Message bien envoyé !']);
				} else {
					echo json_encode(['status' => 'error', 'message' => 'Erreur d\'envoi']);
				}

    } else {
        // Required fields are missing
        echo json_encode(['status' => 'error', 'message' => 'Au moins un des champs requis est manquant !']);
    }
} else {
    // Invalid request method
    echo json_encode(['status' => 'error', 'message' => 'Requête peu orthodoxe.']);
}
?>