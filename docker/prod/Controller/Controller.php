<?php
require_once "Model/Model.php";
require_once "ConnexionController.php";
require_once "InscriptionController.php";
require_once "ModifierUtilisateurController.php";

$formData= [
    'Connexion' => $ConnexionData,
    'Inscription' => $InscriptionData,
    'Modifier' => $ModifierData,
];

foreach ($formData as $formname => $formData){
    require __DIR__ . '/../../libs/View/Formulaires/Form.view.php';
}

require_once "View/header/header_view.php";
require_once "View/header/navbar_view.php";

if (empty($_GET)){
    require_once "View/body/acceuil_view.php";
}
if (isset($_GET['nos_produits'])){
require_once "View/body/produits_view.php";
}
if (isset($_GET['notre_histoire'])){
    require_once "View/body/histoire_view.php";
}
if (isset($_GET['a_propos'])){
    require_once "View/body/a_propos_view.php";
}
if (isset($_GET['account'])){
    if (!isset($_SESSION['login_status'])){
        require_once "View/body/403_view.php";
    }else {
    require_once "View/body/compte_view.php";
    }
}

if (isset($_GET['admin'])){
    if (!isset($_SESSION['login_status']) || $_SESSION['login_status'] !== "Success" || $_SESSION['IDRoles'] != 1) {
        require_once "View/body/403_view.php";
        exit();
    }
    else {
    require_once "View/body/admin_view.php";
    }
}

require_once "View/footer/footer_view.php";
?>