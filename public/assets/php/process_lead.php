<?php

header('Content-Type: application/json');

require_once __DIR__ . '/email_config.php';
require_once __DIR__ . '/send_client_notification_smtp.php';
require __DIR__ . '/vendor/autoload.php';
// require_once __DIR__ . '/send_brochure.php';
// require_once __DIR__ . '/send_client_notification.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit("Invalid request method.");
}

// Collect data
$name    = trim($_POST['name'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$email   = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');
$project = trim($_POST['project'] ?? '');

// -------------------------------
// New Server-Side Validation
// -------------------------------

// Validate Name (only letters, spaces, hyphens allowed)
if (!preg_match("/^[\p{L} \-]+$/u", $name)) {
    http_response_code(400);
    exit("Invalid name. Please use letters, spaces or hyphens only.");
}

// Validate Phone (must start with + and contain digits)
if (!preg_match("/^\+\d{7,20}$/", $phone)) {
    http_response_code(400);
    exit("Invalid phone number format.");
}

// Validate Email (already partially validated, reinforce)
if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    exit("Invalid email format.");
}

// Clean Message (optional)
if (!empty($message)) {
    $message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
}


// Save to DB
try {
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=homagency-db;charset=utf8mb4", "homagency-db-user", "1UY8i1o887BHB0KfVV1B", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    $stmt = $pdo->prepare("INSERT INTO leads (name, phone, email, message, project, created_at, updated_at)
                           VALUES (:name, :phone, :email, :message, :project, NOW(), NOW())");

    $stmt->execute([
        ':name'    => $name,
        ':phone'   => $phone,
        ':email'   => $email,
        ':message' => $message,
        ':project' => $project
    ]);

    $leadData = [
        'name'    => $name,
        'phone'   => $phone,
        'email'   => $email,
        'message' => $message,
        'project' => $project
    ];

    // Send emails
    sendClientNotification($leadData);

    echo json_encode(['success' => true, 'project' => $project]);
} catch (PDOException $e) {
    error_log("Database error: " . $e->getMessage());
    http_response_code(500);
    exit("Server error.");
}
