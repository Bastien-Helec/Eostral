<?php

$header_produits = new Div('body_ID', 'body_CLS', [
    new Glob_Fields('titre_ID', 'titre_CLS', 'h1', 'Nos Produits'),

    new Glob_Fields('recherche_ID', 'recherche_CLS', 'div', '<input type="text" placeholder="Rechercher un produit" name="recherche">'), 
    ]);

$filtre = new Glob_Fields('filtre_ID', 'filtre_CLS', 'div', '<select name="filtre">
        <option value="all">Tous</option>
        <option value="mobile">Mobiles</option>
        <option value="serveur">Serveurs</option>
    </select>');

$data = [
    new Glob_Fields('produit1_ID', 'produit_CLS', 'div', '<h2>Produit 1</h2><p>Description du produit 1</p>'),
    new Glob_Fields('produit2_ID', 'produit_CLS', 'div', '<h2>Produit 2</h2><p>Description du produit 2</p>'),
    new Glob_Fields('produit3_ID', 'produit_CLS', 'div', '<h2>Produit 3</h2><p>Description du produit 3</p>'),
];

$div_produits = new Div('produits_ID', 'produits_CLS', [
    $header_produits,
    $filtre,
    new Glob_Fields('produits_list_ID', 'produits_list_CLS', 'div', $data)
]);

$produit= $div_produits->gen_div();

?>