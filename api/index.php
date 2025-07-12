<?php

// Set error reporting for debugging (will be overridden by Laravel's APP_DEBUG)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Initialize SQLite database for Vercel if it doesn't exist
$dbPath = '/tmp/database.sqlite';
$originalDbPath = __DIR__ . '/../database/database.sqlite';

if (!file_exists($dbPath) && file_exists($originalDbPath)) {
    copy($originalDbPath, $dbPath);
}

// Set timezone if not already set
if (!ini_get('date.timezone')) {
    date_default_timezone_set('Asia/Jakarta');
}

try {
    require __DIR__ . "/../public/index.php";
} catch (Exception $e) {
    // Basic error handling for production
    http_response_code(500);
    echo json_encode([
        'error' => 'Server Error',
        'message' => 'Something went wrong',
        'debug' => [
            'file' => basename($e->getFile()),
            'line' => $e->getLine(),
            'message' => $e->getMessage()
        ]
    ]);
}
