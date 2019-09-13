<?php
define('SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'complejos');
define('DB_PDO', 'mysql:host=localhost;dbname=complejos');

$connection = mysqli_connect(SERVER, DB_USER, DB_PASSWORD, DB_NAME);
?>