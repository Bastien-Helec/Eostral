<?php

require_once './../libs/Model/PHP/FORMULAIRES/FRONT/Form.php';

$form = new Form('modifier_utilisateur_admin');
$form->addElement(new Fields('ID', 'number', 'ID de l\'utilisateur', true, ));
$form->addElement(new Fields("Nom", "text", "Nom", false));
$form->addElement(new Fields("Prenom", "text", "Prénom", false));
$form->addElement(new Fields("Email", "email", "Email", false));
$form->addElement(new Fields('Mdp', 'password', 'Mot de passe', false));


$formData = $form->getData();

$ModifierAdminData = $formData;
?>