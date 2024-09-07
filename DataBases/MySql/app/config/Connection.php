<?php
require_once __DIR__ . '/../../vendor/autoload.php'; 
use Dotenv\Dotenv;

class connectionMySql {
    protected $pdo;
    protected $debugMessage = [];

    public function __construct() {
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
        $dotenv->load();

        $host = $_ENV['DB_HOST'];
        $db   = $_ENV['DB_NAME'];
        $user = $_ENV['DB_USER'];
        $pass = $_ENV['DB_PASS'];

        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->debugMessage["Database Status"] = "Connection established";
        } catch (PDOException $e) {
            $this->debugMessage["Database Status"] = 'Connection failed: ' . $e->getMessage();
        }

    }

    protected function getConnection() {
        return $this->pdo;
    }
}
?>
