<?php
// Entry point of the PHP application

require_once __DIR__ . '/config/database.php';

// Example routing logic
$requestUri = $_SERVER['REQUEST_URI'];

switch ($requestUri) {
    case '/':
        echo "Welcome to my PHP project!";
        break;
    case '/about':
        echo "This is the about page.";
        break;
    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}
?>