<?php

require_once './../libs/Model/PHP/FORMULAIRES/FRONT/Form.php';


$form = new Form('modifier_utilisateur');

$form->addElement(new Fields("Nom", "text", "Nom", false));
$form->addElement(new Fields("Prenom", "text", "Prénom", false));
$form->addElement(new Fields("Email", "email", "Email", false));

$formData = $form->getData();

$ModifierData = $formData;
?>