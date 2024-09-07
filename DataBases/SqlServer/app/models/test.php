<?php
require_once '/home/emmanuel-ajsivinac/Development/PHP-projects/DataBases/SqlServer/config/connection.php';

if (!class_exists('connectionSql')) {
    die('Class connectionSql not found!');
}

class UserModel extends connectionSql {
    public function fetchUsers() {
        try {
            $pdo = $this->getConnection();
            if (!$pdo) {
                die('Failed to get PDO connection.');
            }

            $stmt = $pdo->query('SELECT * FROM TEST_TABLE');
            if (!$stmt) {
                die('Failed to execute query.');
            }

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if (empty($results)) {
                echo "No results found.";
            } else {
                echo "Results:<br>";
                print_r($results);
            }
        } catch (PDOException $e) {
            echo 'PDOException: ' . $e->getMessage();
        } catch (Exception $e) {
            echo 'Exception: ' . $e->getMessage();
        }
    }
}

// Instantiate and use UserModel
$userModel = new UserModel();
$userModel->fetchUsers();
?>
