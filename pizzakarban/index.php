
<?php
    header('Content-Type: application/json; charset=utf-8');
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: *");
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

    $keresPizza = explode("/", $_SERVER["QUERY_STRING"]);
    //var_dump($keresPizza)
    if($keresPizza[0] === "pizzakarban"){
        require_once 'pizzakarbanbackend/index.php';
    }else{
        http_response_code(404);
        echo "Nincs ilyen API";
    }
?>