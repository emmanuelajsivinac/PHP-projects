<?php
require __DIR__ . '/app/controllers/NavigationController.php';
$controller = new NavigationController();
$controller->fetchUsers();
?>
