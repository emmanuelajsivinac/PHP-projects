<?php
/*
require '/home/emmanuel-ajsivinac/Development/PHP-projects/DataBases/SqlServer/vendor/autoload.php';

class connectionSql{
    protected $pdo;

    public function __construct() {
        $dotenv = Dotenv\Dotenv::createImmutable('/home/emmanuel-ajsivinac/Development/PHP-projects/DataBases/SqlServer/');
        $dotenv->load();
        
        $host = $_ENV['DB_HOST'];
        $database   = $_ENV['DB_NAME'];
        $user = $_ENV['DB_USER'];
        $password = $_ENV['DB_PASS'];
        
        echo $host.'<br>';
        echo $user.'<br>';
        echo $database.'<br>';
        echo $password.'<br>';

        try {
            $this->pdo = new PDO("sqlsrv:Server=$host;Database=$database", $user, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    protected function getConnection() {
        return $this->pdo;
    }   

}*/

class connectionSql {
    protected $pdo;

    public function __construct() {
        $host = '172.17.0.2';
        $db   = 'TEST';
        $user = 'sa';
        $pass = 'Strong#Password';

        try {
            $this->pdo = new PDO("sqlsrv:Server=$host;Database=$db", $user, $pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage() . "<br>";
        }
    }

    protected function getConnection() {
        return $this->pdo;
    }
}
?>