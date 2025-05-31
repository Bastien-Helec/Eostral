<?php
session_start();

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}



require_once __DIR__ . "/../../libs/Model/JS/FORMULAIRES/call.php";
require_once __DIR__ . "/../../libs/Model/JS/remove_event.php";
require_once __DIR__ . "/../../libs/Model/JS/FORMULAIRES/remove_banner.php";
require_once __DIR__ . "/../../libs/Model/JS/FORMULAIRES/Send.php";

if (!isset($_SESSION['login_status']) || $_SESSION['login_status'] !== "Success") {
    $ajout_utilisateur = new JS_CALL_FORM('ajout_utilisateur_div', 'Inscription','banner');
    echo $ajout_utilisateur->gen_print_FORM_js();
    
    $ajout_utilisateur_remove_JS = new JS_Remove_Event('ajout_utilisateur_div', 'Inscription');
    echo $ajout_utilisateur_remove_JS->gen_remove_js();
    
    $Connexion_Call_JS = new JS_CALL_FORM('Connexion_div', 'Connexion','banner');
    echo $Connexion_Call_JS->gen_print_FORM_js();;
    
    $Connexion_remove_js = new JS_Remove_Event('Connexion_div', 'Connexion');
    echo $Connexion_remove_js->gen_remove_js();
    
    $send_cnx = new Send('Connexion_form', 'Model/Model_Back.php', );
    $send_cnx->Send();
    
    $send_inscription = new Send('ajout_utilisateur_form', 'Model/Model_Back.php');
    $send_inscription->Send();
}

if (isset($_SESSION['login_status']) && $_SESSION['login_status'] === "Success") {

$Modifier_Call_JS = new JS_CALL_FORM('modifier_utilisateur_div', 'Modifier', 'banner');
echo $Modifier_Call_JS->gen_print_FORM_js();

$Modifier_remove_js = new JS_Remove_Event('modifier_utilisateur_div', 'Modifier');
echo $Modifier_remove_js->gen_remove_js();

$send_modifier = new Send('modifier_utilisateur_form', 'Model/Model_Back.php');
$send_modifier->Send();

if (isset($_SESSION['IDRoles']) && $_SESSION['IDRoles'] === 1) {

$ajout_produit = new JS_CALL_FORM('ajout_produit_div', 'ajout_produit_id', 'banner');
echo $ajout_produit->gen_print_FORM_js();

$ajout_produit_remove_JS = new JS_Remove_Event('ajout_produit_div', 'ajout_produit_id');
echo $ajout_produit_remove_JS->gen_remove_js();

$send_ajout_produit = new Send('ajout_produit_form', 'Model/Model_Back.php');
$send_ajout_produit->Send();
}
}



$banner_remove = new JS_Remove_Banner('banner');
echo $banner_remove->Remove_Banner_js();



?>