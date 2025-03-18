<?php
$user = 'root';
$password = "";

try {
    $conn = new PDO('mysql:host=localhost;dbname=challenge', $user, $password);

    $stmt = $conn->prepare('SELECT * FROM avis');

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>