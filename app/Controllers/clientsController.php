<?php
   
    require_once "../Models/Client.php";

    class clientsController
    {
        private $model;

        function __construct()
        {
            $this->model = new ClientModel();
        }
    

    function getAll()
    {
        $resultData = $this->model->getAll();
        $_SESSION['var'] = $resultData;


        //require_once('../Views/index.php');
    }

}
?>