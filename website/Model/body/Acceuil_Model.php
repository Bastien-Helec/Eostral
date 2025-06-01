<?php

$div_bienvenue = new Div('acceuil_ID', 'acceuil_CLS', [
    new Glob_Fields('acceuil_part1_ID', 'acceuil_CLS', 'h1', 'Bienvenue sur Eostral'),

    new Glob_Fields('acceuil_intro_ID', 'acceuil_CLS', 'h2', "L'innovation est au coeur de notre travail ce qui fait que nous avons l'obligation de toujours être a la pointe de la technologie."),

    new Glob_Fields('acceuil_part2_ID', 'acceuil_CLS', 'h2', "Chez Eostral, on réinvente la concepetion du cloud"),

    new Glob_Fields('acceuil_part3_ID', 'acceuil_CLS', 'h2', "'ECMobile', Une conception de notre main ou encore EosPhone sont des programmes visant a exporter le cloud local partout simplement tout en offrant une grande portabilité. "),

]);

$div_nouveautés_produits_Serveur = new Div(
    'nouveautes_produits_Serveur', 'nouveautes_produits_Serveur_CLS', [
        new Glob_Fields(
            'nouveautes_produits_Serveur_1_ID', 'nouveautes_produits_Serveur_CLS', 'span', 'Produit Serveur 1'
        ),
        new Glob_Fields(
            'nouveautes_produits_Serveur_2_ID', 'nouveautes_produits_Serveur_CLS', 'span', 'Produit Serveur 2'
        ),
        new Glob_Fields(
            'nouveautes_produits_Serveur_3_ID', 'nouveautes_produits_Serveur_CLS', 'span', 'Produit Serveur 3'
        )
    ]
    );

$div_nouveautés_produits_Mobile = new Div(
    'nouveautes_produits_Mobile', 'nouveautés_produits_Mobile_CLS', [
    new Glob_Fields(
        'nouveautes_produits_Mobile_1_ID', 'nouveautes_produits_Mobile_CLS', 'span', 'Produit Mobile 1'
    ),
    new Glob_Fields(
        'nouveautes_produits_Mobile_2_ID', 'nouveautes_produits_Mobile_CLS', 'span', 'Produit Mobile 2'
    ),
    new Glob_Fields(
        'nouveautes_produits_Mobile_3_ID', 'nouveautes_produits_Mobile_CLS', 'span', 'Produit Mobile 3'
    )
    ]);

$div_nouveautés_produits = new Div(
    'nouveautes_produits', 'nouveautés_produits_CLS', 
    [
        new Glob_Fields('nouveautes_produits_ID', 'nouveautes_produits_CLS', 'h2', 'Nos Nouveaux Produits'),
        $div_nouveautés_produits_Serveur,
        new Glob_Fields('produits_Serveur_hr_ID', 'produits_Serveur_hr_CLS', 'hr', ''),
        $div_nouveautés_produits_Mobile
    ]
);


// Création de la page d'accueil

$acceuil = new Div('home_ID', 'home_CLS', [
    $div_bienvenue,
    // $div_nouveautés_produits
]);

// Génération de la page d'accueil
$body = $acceuil->gen_div();

?>