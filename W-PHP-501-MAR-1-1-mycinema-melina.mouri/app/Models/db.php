<?
$host = '127.0.0.1'; // Pas 'localhost', car WSL utilise souvent 127.0.0.1
$dbname = 'cinema';
$username = 'root';
$password = ''; // Mets ton mot de passe si tu en as un

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
