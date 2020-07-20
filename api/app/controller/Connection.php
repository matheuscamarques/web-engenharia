<?php
    require_once "../../vendor/autoload.php";


use App\model\Connection;
$conn = Connection::start();
if($conn != null){
    $valor = json_encode(true);
}
else{
    $valor = json_encode(false);
} 

echo $valor;





