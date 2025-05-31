<?php
if (isset($_SESSION['email'] ) && !empty($_SESSION['email'])) {
    $usr = new SQL_Select('IDRoles,Nom,Prenom,Email', 'User');
    $usr_data = $usr->execute_Simple_SQL('Email = "'.$_SESSION['email'].'"' , $pdo_cnx);
    $_SESSION['IDRoles'] = $usr_data[0]['IDRoles'];
    
    $div_compte =new Div(
        'compte_ID',
        'compte_CLS',
        [
            new Bouton('Modifier', 'Modifier','btn'),
               new Glob_Fields('suppression', 'btn', 'button', ['<a href="?suppression_compte">Supprimer</a>']),
        new Div(
            'compte_header_ID',
            'compte_header_CLS',
            [
                new Glob_Fields('compte_header_txt_ID', 'compte_header_txt_CLS', 'h1', ['Mon Compte']),
                ]
            ),

            new Div(
            'compte_body_ID',
            'compte_body_CLS',
            [
                new Glob_Fields('compte_user_txt_ID', 'compte_user_txt_CLS', 'p', ['Bienvenue, '.$usr_data[0]['Prenom'].' '.$usr_data[0]['Nom']]),
                new Glob_Fields('compte_email_txt_ID', 'compte_email_txt_CLS', 'p', ['Votre email : '.$usr_data[0]['Email']]),
                ]
                )
                ]
            );
            
            $compte = $div_compte->gen_div();
        }
?>