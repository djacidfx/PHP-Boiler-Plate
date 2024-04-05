--
-- Create the database 
--
CREATE DATABASE IF NOT EXISTS `mydatabase`;  
USE `mydatabase`;

-- 
-- Create a 'users' table
-- 
CREATE TABLE IF NOT EXISTS `users` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(50) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

--
-- Insert sample user data
--
INSERT INTO `users` (`username`, `password`, `email`) 
VALUES ('example_user', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'example@email.com'); 
-- Use a strong password hashing mechanism for production environments
