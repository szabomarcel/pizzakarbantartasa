<?php
switch($_SERVER['REQUEST_METHOD']){
    case 'GET':
        require_once 'pizzakarbanbackend/getpizzakarban.php';
        break;
    case 'POST':
        require_once 'pizzakarbanbackend/postpizzakarban.php';
        break;
    case 'DELETE':
        require_once 'pizzakarbanbackend/deletepizzakarban.php';
        break;
    case 'PUT':
        require_once 'pizzakarbanbackend/putpizzakarban.php';
        break;
    default: break;
}