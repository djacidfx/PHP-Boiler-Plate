<?php

// Database Configuration
define('DB_HOST', 'localhost');    // Your database host
define('DB_NAME', 'mydatabase');   // The name of your database
define('DB_USER', 'myuser');       // Your database username
define('DB_PASSWORD', 'mypassword'); // Your database password

// Application Settings
define('SITE_TITLE', 'My Website'); 
define('BASE_URL', 'http://www.example.com/');  // Base URL of your application

// Other (Optional)
define('DEBUG_MODE', true);  // Set to true for error reporting during development
define('TIMEZONE', 'America/Los_Angeles');   // Set your desired timezone 
//
// Explanation
//
  //  Database Configuration: These constants (DB_HOST, DB_NAME, DB_USER, DB_PASSWORD) are used to establish a connection to your database. Replace the placeholders with your actual database credentials.
  //  Application Settings:
  //   - SITE_TITLE is used to display the title of your website.
  // - BASE_URL is the root address of your website.
  //  Other:
  //  - DEBUG_MODE is helpful during development for enabling error reporting. Set to false in production environments.
 // - TIMEZONE ensures accurate timestamps. Adjust according to your location.

// Important Notes
//
// Security: Store config.php outside of your webroot (the public folder of your website) for enhanced security. Make sure it's not directly accessible from the web. This prevents someone from directly accessing the file and reading your sensitive database credentials.
// Replace Placeholders: Update the values within the define() statements to match your actual database information and site settings.
?>
