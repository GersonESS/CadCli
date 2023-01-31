<?php

    // $nameController = $_GET['c'];
    // include_once ('./controllers/'.$nameController.'Controller.php');
    require_once ('./controllers/clientsController.php');
    $controller = new ClientsController();
    
    $action = !empty($_GET['a'])  ?  $_GET['a'] : 'getAll';
    // $controller->{$action};
    $controller->{$action};
?>