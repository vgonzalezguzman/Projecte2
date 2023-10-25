<?php
$dsn = 'mysql:dbname=projecte2';
$host = 'localhost';
$user = 'root';
$password = '';
try {
    $sql = new PDO($dsn, $user, $password);
    echo('conexion exitosa');

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM apartament");
    $stmt->execute();

    $result = $pdo->query($stmt)->fetchAll();
    foreach($data as $row) {
        echo $row['titol'];
    }

} catch (PDOException $e) {
    die('Ha fallat la connexió: ' . $e->getMessage());
}
?>