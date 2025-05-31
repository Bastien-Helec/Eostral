<?php 

require_once __DIR__ . '/../../libs/Model/PHP/FORMULAIRES/BACK/Form.php';
require_once __DIR__ . '/../../libs/Model/PHP/FORMULAIRES/BACK/Update.php';
require_once __DIR__ . '/../../libs/Model/PHP/FORMULAIRES/BACK/Auth.php';
require_once __DIR__ . '/../../libs/Model/PHP/FORMULAIRES/BACK/Glob_Handling.php';
require_once __DIR__ . '/../../libs/Model/PHP/FORMULAIRES/BACK/Delete.php';
require_once __DIR__ . '/../../libs/Model/PHP/BDD/pdo.php';
require_once 'pdo.php';
require_once __DIR__ . '/../../libs/Model/PHP/BDD/SQL/Select.php';
require_once __DIR__ . '/../../libs/Model/PHP/BDD/SQL/Insert.php';
require_once __DIR__ . '/../../libs/Model/PHP/BDD/SQL/Update.php';
require_once __DIR__ . '/../../libs/Model/PHP/BDD/SQL/Delete.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['form_id'])) {
switch ($_POST['form_id']){
    case 'Connexion':
        $Cnx = new Auth('banner', 'Sur Esotral', $pdo_cnx);
        $Cnx->FORM_Connect('MDP,Nom,Prenom,Email,IDRoles', 'Prenom', 'Nom', 'Email', 'Email', 'Password', 'MDP', 'User');
        break;
    case 'ajout_utilisateur':
        $cnx_inscription = new Glob_Handling('banner', '', $pdo_cnx);
        $cnx_inscription->FORM_Interact('User','Nom,Prenom,Email,MDP,IDRoles',['nom', 'Prenom', 'Email', 'Mdp'],
        ['Mdp' => 'password_hash'],
        "SELECT", ",ID FROM Role WHERE libelle='Client'");
        break;

    case 'modifier_utilisateur':
    $modif = new Update('banner', '', $pdo_cnx);
    $modif->set_update(['Prenom','Email', 'Nom'], 'User', 'ID= "'.$_SESSION['id'].'"');
        break;

    case 'Modifier_user_admin':
        if (isset($_GET['admin'])){
            $update = new Update('banner', 'Sur Esotral', $pdo_cnx);
            $update->set_update(['Nom', 'Prenom', 'Email'], 'User', 'ID = "'.$_SESSION['user_admin_ID'].'"');
            
        }
        break;

    case 'Modifier_produit_admin':
        if (isset($_GET['modifier_produit'])) {
            $update = new Update('banner', 'Sur Esotral', $pdo_cnx);
            $update->set_update(['Nom', 'Description', 'Prix', 'Model', 'MotsCles', 'Qte'], 'Produits', 'ID = "'.$_SESSION['produit_admin_ID'].'"');
        }
        break;
    case 'ajout_produit':
        $insert = new Glob_Handling('banner', 'Sur Esotral', $pdo_cnx);
        $insert->FORM_Interact('Produits', 'Nom,Description,Prix,Model,MotsCles,Qte', 
        ['Nom', 'Description', 'Prix', 'Model', 'MotsCles', 'Qte'], 
        [],);
        break;

    }





}
?>
