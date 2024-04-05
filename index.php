<?php

// Configuration
require_once 'config.php'; 

// Routing (Very basic example)
$requestURI = explode('/', $_SERVER['REQUEST_URI']);
$scriptName = explode('/', $_SERVER['SCRIPT_NAME']);

// Remove base path elements from the request
for ($i = 0; $i < sizeof($scriptName); $i++) {
    if ($requestURI[$i] == $scriptName[$i]) {
        unset($requestURI[$i]);
    }
}

$requestURI = array_values($requestURI); 

// Simple routing
if (empty($requestURI)) {
    require_once 'views/home.php';
} else {
    // Handle other routes as needed
}

?>
