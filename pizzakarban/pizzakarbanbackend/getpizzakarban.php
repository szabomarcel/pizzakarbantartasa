<?php
$sql = '';
if(count($keresPizza) > 1){
    if(is_int(intval($keresPizza[1]))){
        $sql = 'SELECT * FROM pizza WHERE pazon=' .$keresPizza[1];
    }else{
        http_response_code(404);
        return json_encode(array("message" => 'Nem létező pizza'));
    }
}else{
    $sql = 'SELECT * FROM pizza WHERE 1';
}
require_once './databaseconnect.php';
$result = $connection->query($sql);
if($result->num_rows > 0){
    $pizzakarban = array();
    while($row = $result->fetch_assoc()){ 
        $pizzakarban[] = $row;
    }
    http_response_code(200);
    echo json_encode($pizzakarban);
}else{
    http_response_code(404);
    echo 'Me, létező pizza karbantartás.';
}