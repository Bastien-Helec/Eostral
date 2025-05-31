<?php

// Création affichage principal : 
$header = new Div('head_eostral_ID', 'header_logo', [
    new Logo("View/Eostral_Header.png", 'Eostral_Logo_Header', 'logo')
]);

// var_dump($_SESSION ?? '');

// Parti Connexion -> droite
if (!isset($_SESSION['login_status']) || $_SESSION['login_status'] !== "Success") {
$cnx = new Div('cnx_header_ID', 'header', [
    new Logo('View/Eostral_cnx.png', 'cnx_logo_ID', 'logo'),
    new Bouton('Connexion', 'Se Connecter','btn'),
    new Bouton('Inscription', "S'inscrire",'btn'),
]);
} else {
    $sql_user = new SQL_Select ('ID,IDRoles,Nom,Prenom', 'User');
    $user= $sql_user->execute_Simple_SQL('Email = "'.$_SESSION['email'].'"' , $pdo_cnx);
    $_SESSION['id'] = $user[0]['ID'];
    
    if ($user[0]['IDRoles'] == 1) {
        $admin = new Glob_Fields('cnx_user_admin_ID', 'cnx_user_admin_CLS', 'button', ['<a href="?admin">Admin</a>']);
    }
    else {
        $admin = null;
    }
    
    $user = new Glob_Fields('cnx_user_txt_ID', 'cnx_user_txt_CLS', 'button', ['<a href="?account">'. $user[0]["Nom"].' '.$user[0]["Prenom"].'</a>']);
    
    
    $cnx = new Div('cnx_header_ID', 'header', [
        new Logo('View/Eostral_cnx.png', 'cnx_logo_ID', 'logo'),
        new Div ('cnx_user_ID', 'cnx_user_CLS', [
            $user,
            $admin,
        new Glob_Fields('', '','br', ''),
        new Glob_Fields('cnx_btn_ID', 'cnx_btn_CLS', 'button', ['<a href="?logout">Deconnexion</a>'])
    ])
]);
}

$head = new Div('head_ID', 'head_CLS', [
    $header,
    $cnx,
]);


$head = $head->gen_div();


?>