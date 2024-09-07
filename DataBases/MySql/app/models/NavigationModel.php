<?php
require_once __DIR__ . '/../config/Connection.php';

class NavigationModel extends connectionMySql {
    protected $queryResult;

    public function fetchUsers() {
        try {
            $pdo = $this->getConnection();
            if (!$pdo) {
                die('Failed to get PDO connection.');
                $this->debugMessage["Connection"] = "Failed to get PDO connection";
            }

            $this->debugMessage["Connection"] = "Connection established.<br>";

            $stmt = $pdo->query('SELECT * FROM TEST_USERS');
            if (!$stmt) {
                die('Failed to execute query.');
                $this->debugMessage["Query Status"] = "Failed to execute query";
            }

            $this->debugMessage["Query Status"] = "Query executed.<br>";

            $this->queryResult = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if (empty($this->queryResult)) {
                $this->queryResult = "No results found";
            }
        } catch (PDOException $e) {
            $this->debugMessage["Exception"] = $e->getMessage();
        } catch (Exception $e) {
            $this->debugMessage["Exception"] = $e->getMessage();
        }
        
        return $this->queryResult;
    }

    public function getDebugMessage()
    {
        return $this->debugMessage;
    }
}
?>
