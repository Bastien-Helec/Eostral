<?php


/* Etape 1 Gestion des produits :

Pour chaque produit, on va créer un formulaire de modification ou si on veut le supprimer on enverra directement la demande de suppression avec un refresh de la page. 
*/

// On affiche les utilisateurs : 


$users = new SQL_Select('ID,Nom,Prenom,Email,IDRoles', 'User');
$users_data = $users->execute_Cmplx_fetchAll_SQL('', $pdo_cnx);
$div_users = new Div('users_admin_ID', 'users_CLS', [
    new Bouton('ajout_user_admin_ID', 'Ajouter', 'btn'),
    new Glob_Fields('users_header_ID', 'users_header_CLS', 'h1', ['Gestion des utilisateurs']),
    new Div(
        'users_body_ID',
        'users_body_CLS',
        array_map(function($user) use ($pdo_cnx) {
            return new Div(
                'user_'.$user['ID'].'_ID',
                'user_'.$user['ID'].'_CLS',
                [
                    new Glob_Fields('user_name_ID', 'user_name_CLS', 'p', ['Nom: '.$user['Nom']]),
                    new Glob_Fields('user_prenom_ID', 'user_prenom_CLS', 'p', ['Prénom: '.$user['Prenom']]),
                    new Glob_Fields('user_email_ID', 'user_email_CLS', 'p', ['Email: '.$user['Email']]),
                    new Glob_Fields('user_role_ID', 'user_role_CLS', 'p', ['Rôle: '.$user['IDRoles']]),
                    new Bouton('Modifier_user_admin', 'Modifier_'.$user['ID'], 'btn'),
                    new Glob_Fields('suppression_'.$user['ID'], 'btn', 'button', ['<a href="?suppression_user='.$user['ID'].'">Supprimer</a>'])
                ]
            );
        }, $users_data)
    )
]);


/* Etape 2 Gestion des utilisateurs :
Pour chaque utilisateur, on va créer un formulaire de modification ou si on veut le supprimer on enverra directement la demande de suppression avec un refresh de la page.
*/

// On affiche les produits 
$produits = new SQL_Select('ID,Nom,Description,Prix,Model,MotsCles,Qte', 'Produits');
$produits_data = $produits->execute_Cmplx_fetchAll_SQL('', $pdo_cnx);
$produits_div = new Div('produits_admin_ID', 'produits_CLS', [
    new Glob_Fields('produits_header_ID', 'produits_header_CLS', 'h1', ['Gestion des produits']),
    new Bouton('ajout_produit_id', 'Ajouter', 'btn'),
    new Div(
        'produits_body_ID',
        'produits_body_CLS',
        array_map(function($produit) use ($pdo_cnx) {
            return new Glob_Fields(
                'produit_'.$produit['ID'].'_ID',
                'produit_btn',
                'a',[
                    new Glob_Fields('produit_name_ID', 'produit_name_CLS', 'p', ['Nom: '.$produit['Nom']]),
                    new Glob_Fields('produit_desc_ID', 'produit_desc_CLS', 'p', ['Description: '.$produit['Description']]),
                    new Glob_Fields('produit_price_ID', 'produit_price_CLS', 'p', ['Prix: '.$produit['Prix']]),
                    new Glob_Fields('produit_model_ID', 'produit_model_CLS', 'p', ['Modèle: '.$produit['Model']]),
                    new Glob_Fields('produit_keywords_ID', 'produit_keywords_CLS', 'p', ['Mots clés: '.$produit['MotsCles']]),
                    new Glob_Fields('produit_quantity_ID', 'produit_quantity_CLS', 'p', ['Quantité: '.$produit['Qte']]),

                    new Glob_Fields('Modifier_produit_admin', 'btn', 'button', ['Modifier_'.$produit['ID'].'']),
                    new Glob_Fields('suppression_'.$produit['ID'], 'btn', 'button', ['<a href="?suppression_produit='.$produit['ID'].'">Supprimer</a>']),
                    ]
            );
        }, $produits_data)
    )
]);

if(isset($_GET['suppression_user'])) {
    // On supprime l'utilisateur
    $user_id = $_GET['suppression_user'];
    $delete = new Delete_SQL('User');
    $delete->execute_Simple_SQL('ID = "'.$user_id.'"' , $pdo_cnx);
}

if(isset($_GET['suppression_produit'])) {
    // On supprime le produit
    $produit_id = $_GET['suppression_produit'];
    $delete = new Delete_SQL('Produits');
    $delete->execute_Simple_SQL('ID = "'.$produit_id.'"' , $pdo_cnx);
}

$div_global = new Div(
    'admin_global_ID',
    'admin_global_CLS',
    [
        $div_users,
        $produits_div
    ]
);


$div_global_html = $div_global->gen_div();

?>