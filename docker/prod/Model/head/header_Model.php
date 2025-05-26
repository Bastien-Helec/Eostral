<?php

// Création affichage principal : 
$header = new Div('head_eostral_ID', 'header_logo', [
    new Logo("View/Eostral_Header.png", 'Eostral_Logo_Header', 'logo')
]);


// Parti Connexion -> droite
if (!isset($_SESSION['login_status']) || $_SESSION['login_status'] !== "Success") {
$cnx = new Div('cnx_header_ID', 'header', [
    new Logo('View/Eostral_cnx.png', 'cnx_logo_ID', 'logo'),
    new Glob_Fields('cnx_txt_ID', 'cnx_CLS', 'h2', 'Se connecter'),
]);
}

$head = new Div('head_ID', 'head_CLS', [
    $header,
    $cnx,
]);


$head = $head->gen_div();


?>