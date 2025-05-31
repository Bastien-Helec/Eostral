<?php

require_once './../libs/Model/PHP/FORMULAIRES/FRONT/Form.php';


$form = new Form('ajout_utilisateur_admin');

$form->addElement(new Fields("nom", "text", "Nom", true));
$form->addElement(new Fields("Prenom", "text", "Prénom", true));
$form->addElement(new Fields("Email", "email", "Email", true));
$form->addElement(new Fields("Mdp", "password", "Mot de Passe", true));


$formData = $form->getData();

$InscriptionAdminData = $formData;

?>