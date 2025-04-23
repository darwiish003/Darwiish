<?php
// Start the session
session_start();

// Define site constants
define('SITE_NAME', 'Darwiish');
define('BASE_URL', 'http://localhost/Darwiish/');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <h1>WELCOME STUDENT FORM <h1>
                <li><a href="<?php echo BASE_URL; ?>">Home</a></li>
                <li><a href="<?php echo BASE_URL; ?>about.php">About</a></li>
                <li><a href="<?php echo BASE_URL; ?>contact.php">Contact</a></li>
                <?php if (isset($_SESSION['user'])): ?>
                    <li><a href="<?php echo BASE_URL; ?>logout.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="<?php echo BASE_URL; ?>login.php">Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>