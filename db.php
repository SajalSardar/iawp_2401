<?php
// db connect
define('DB_HSOT', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'iawp_2401');

// Create connection
$conn = mysqli_connect(DB_HSOT, DB_USER, DB_PASS, DB_NAME);