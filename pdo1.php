<?php
echo "<h1>PDO demo!</h1>";
$username = 'gds24';
$password = 'OEgO7oED';
$hostname = 'sql.njit.edu';
$dsn = "mysql:host=$hostname;dbname=$gds24";
try {
    $conn = new PDO($dsn, $username, $password);
    echo "Connected successfully<br>";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$conn = null;
?>
