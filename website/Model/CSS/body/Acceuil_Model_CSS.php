<?php

// Partie Introduction
$div_accueil = (new Args_CSS('#acceuil_ID'))
    ->set('display', 'flex')
    ->set('flex-direction', 'column')
    ->set('justify-content', 'center')
    ->set('align-items', 'center')
    ->set('text-align', 'center')
    ->set('color', '#F8F9FA')
    ->set('font-family', '"Great Vibes", cursive')
    ->set('background-image', 'url(./../View/Eostral_Home.png)')
    ->set('background-size', 'cover')
    ->set('background-repeat', 'no-repeat')
    ->set('background-position', 'center')
    ->set('width', '100%')
    ->set('height', '100%');


    $h1_accueil = (new Args_CSS('#acceuil_part1_ID'))
    ->set('display', 'flex')
    ->set('position', 'relative')
    ->set('top', '-20%')
    ->set('font-size', '5rem')
    ->set('margin', '0 0 20px')
    ->set('font-weight', 'bold')
    ->set('text-shadow', '2px 2px 4px rgba(0, 0, 0, 0.5)');
    
$h2_accueil_intro = (new Args_CSS('#acceuil_intro_ID'))
->set('display', 'flex')
    ->set('position', 'relative')
    ->set('top', '-5%')
    ->set('font-size', '3rem')
    ->set('margin', '0 0 20px')
    ->set('text-shadow', '2px 2px 4px rgba(0, 0, 0, 0.5)');

$h2_accueil_part2 = (new Args_CSS('#acceuil_part2_ID'))
->set('display', 'flex')
    ->set('position', 'relative')
    ->set('top', '0%')
    ->set('font-size', '3rem')
    ->set('margin', '0 0 20px')
    ->set('text-shadow', '2px 2px 4px rgba(0, 0, 0, 0.5)');

$h2_accueil_part3 = (new Args_CSS
    ('#acceuil_part3_ID'))
    ->set('display', 'flex')
    ->set('position', 'relative')
    ->set('top', '5%')
    ->set('font-size', '3rem')
    ->set('margin', '0 0 20px')
    ->set('text-shadow', '2px 2px 4px rgba(0, 0, 0, 0.5)');


// Partie Nos Nouveaux Produits

$div_nouveautés_produits = (new Args_CSS('#nouveautes_produits'))
    ->set('background-color', '#5A7FA6')
    ->set('display', 'flex')
    ->set('flex-direction', 'column')
    ->set('align-items', 'center')
    ->set('text-align', 'center')
    ->set('font-size', '2rem')
    ->set('font-family', 'Playfair, serif') 
    ->set('color', '#F8F9FA')
    ;


$div_nouveautés_produits_Serveur = (new Args_CSS('#nouveautes_produits_Serveur'))
    ->set('display', 'flex')
    ->set('flex-direction', 'row')
    ->set('justify-content', 'space-around')
    ->set('width', '80%')
    ->set('margin', '20px 0');

$nouveautés_produits_Serveur = (new Args_CSS('#nouveautes_produits_Serveur_1_ID, #nouveautes_produits_Serveur_2_ID  ,#nouveautes_produits_Serveur_3_ID '))
->set('background-color', '#F8F9FA')
->set('height', '150px')
->set('text-align', 'center')
->set('border-radius', '7px');

$div_hr = (new Args_CSS('#produits_Serveur_hr_ID'))
    ->set('width', '80%')
    ->set('border', '2px solid black');



$div_nouveautés_produits_Mobiles = (new Args_CSS('#nouveautes_produits_Mobile'))
    ->set('display', 'flex')
    ->set('flex-direction', 'row')
    ->set('justify-content', 'space-around')
    ->set('width', '80%')
    ->set('margin', '20px 0'); 

$nouveautés_produits_Mobiles = (new Args_CSS('#nouveautes_produits_Mobile_1_ID, #nouveautes_produits_Mobile_2_ID  ,#nouveautes_produits_Mobile_3_ID '))
->set('background-color', 'lightblue')
->set('height', '150px')
->set('text-align', 'center')
->set('color','lightblue')
->set('border-radius', '7px');





$home = [
    $div_accueil,
    $h1_accueil,
    $h2_accueil_intro,
    $h2_accueil_part2,
    $h2_accueil_part3,
    $div_nouveautés_produits,
    $div_nouveautés_produits_Serveur,
    $nouveautés_produits_Serveur,
    $div_hr,
    $nouveautés_produits_Mobiles,
    $div_nouveautés_produits_Mobiles,
];


?>