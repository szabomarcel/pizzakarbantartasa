<?php
$sql = '';
if(count($keresPizza) > 1){
    if(is_int(intval($keresPizza[1]))){
        $sql = 'DELETE FROM pizza WHERE pazon=' . $keresPizza;
    }else{
        http_response_code(404);
        echo 'Nem, létező pizza karbantartás.';    
    }
}
require_once './databaseconnect.php';
//$result = $connection->query($sql);
if($result = $connection->query($sql)){   
    http_response_code(201);
    echo 'Sikeresen lett törölve.';
}else{
    http_response_code(404);
    echo 'Nem lett sikeresen törölve.';
}