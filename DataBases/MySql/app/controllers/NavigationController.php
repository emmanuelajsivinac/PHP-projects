<?php
require __DIR__ . '/../models/NavigationModel.php';

class NavigationController {
    private $model;

    public function __construct()
    {
        $this->model = new NavigationModel();   
    }

    public function fetchUsers(){
        $queryResult = $this->model->fetchUsers();
        $debugMessages = $this->model->getDebugMessage();
        $dateTime = date('Y-m-d H:i:s');
        error_log("[$dateTime]Debug Messages: " . print_r($debugMessages, true));
        include __DIR__ . '/../views/NavigationView.php';
    }
}

?>