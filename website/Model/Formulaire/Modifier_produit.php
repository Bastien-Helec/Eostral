<?php

require_once './../libs/Model/PHP/FORMULAIRES/FRONT/Form.php';

$form = new Form('modifier_produit');

$form->addElement(new Fields('ID', 'number', 'ID du produit', true, ));
$form->addElement(new Fields("Nom", "text", "Nom du produit", false));
$form->addElement(new Fields("Description", "textarea", "Description du produit", false));
$form->addElement(new Fields("Prix", "number", "Prix du produit", false));
$form->addElement(new Fields('Model', 'text', 'Modèle du produit', false));
$form->addElement(new Fields('MotsCles', 'text', 'Mots clés du produit', false));
$form->addElement(new Fields('Qte', 'number', 'Quantité du produit', false));

$formData = $form->getData();
$Modifier_produitData = $formData;


?>