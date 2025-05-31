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
}


}
?>
