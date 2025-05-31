<?php

require_once './../libs/Model/PHP/FORMULAIRES/FRONT/Form.php';

$form = new Form('Connexion');
$form->addElement(new Fields("Email", "email", "Email", true));
$form->addElement(new Fields("Password", "password", "Mot de Passe", true));

$formData = $form->getData();

$ConnexionData = $formData;



?>