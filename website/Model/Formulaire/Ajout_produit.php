<?php

require_once './../libs/Model/PHP/FORMULAIRES/FRONT/Form.php';


$form = new Form('ajout_produit');
$form->addElement(new Fields("Nom", "text", "Nom du produit", true));
$form->addElement(new Fields("Description", "textarea", "Description du produit", true));
$form->addElement(new Fields("Prix", "number", "Prix du produit", true));
$form->addElement(new Fields('Model', 'text', 'Modèle du produit', true));
$form->addElement(new Fields('MotsCles', 'text', 'Mots clés du produit', true));
$form->addElement(new Fields('Qte', 'number', 'Quantité du produit', true));


$formData = $form->getData();
$Ajout_produitData = $formData;

?>