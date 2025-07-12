<?php

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if this is a simple test
if (isset($_GET['test'])) {
    echo json_encode([
        'status' => 'API Working',
        'timestamp' => date('Y-m-d H:i:s'),
        'php_version' => phpversion(),
        'memory_limit' => ini_get('memory_limit')
    ]);
    exit;
}

// Set timezone
date_default_timezone_set('Asia/Jakarta');

// Initialize SQLite database for Vercel
$dbPath = '/tmp/database.sqlite';
$originalDbPath = __DIR__ . '/../database/database.sqlite';

try {
    // Copy database if needed
    if (!file_exists($dbPath) && file_exists($originalDbPath)) {
        copy($originalDbPath, $dbPath);
    }

    // Check if Laravel files exist
    if (!file_exists(__DIR__ . '/../vendor/autoload.php')) {
        throw new Exception('Composer autoload not found');
    }

    if (!file_exists(__DIR__ . '/../public/index.php')) {
        throw new Exception('Laravel public/index.php not found');
    }

    // Load Laravel
    require __DIR__ . "/../public/index.php";
} catch (Exception $e) {
    http_response_code(500);
    header('Content-Type: application/json');
    echo json_encode([
        'error' => 'Laravel Boot Error',
        'message' => $e->getMessage(),
        'file' => basename($e->getFile()),
        'line' => $e->getLine(),
        'trace' => $e->getTraceAsString()
    ]);
}
