<?php
echo "<h1>PDO demo!</h1>";
$username = 'gds24';
$password = 'OEgO7oED';
$hostname = 'sql.njit.edu';
$dsn = "mysql:host=$hostname;dbname=$username";
try {
    $conn = new PDO($dsn, $username, $password);
    echo "Connected successfully<br>";

    $sql = $conn->prepare("SELECT * FROM gds24.accounts WHERE id<6");
    $sql->setFetchMode(PDO::FETCH_ASSOC);
    $sql->execute();
    $rows = $sql->fetchAll();
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$conn = null;
echo 'rows: ';
$count = count($rows);
echo $count. '<br>';

echo '<table>';
foreach($rows as $data) {
  echo '<tr><td>'.$data['email'].'</td></tr>';

}
echo '</table>';
?>