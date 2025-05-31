<?php

require_once __DIR__ . '/../../libs/Model/PHP/BDD/pdo.php';


$pdo = new DBPDO ('192.168.1.45','Eostral_db', 'Eostral_user', 'Eostral_password', '3306');

ob_start();
$pdo_cnx=$pdo->connect();
$log_message = ob_get_clean();


?>