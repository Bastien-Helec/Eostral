<?php

$div_global_html_css= (new Args_CSS('#admin_global_ID'))
    ->set('display', 'flex')
    ->set('flex-direction', 'row') // ⚠️ remplace "column" par "row"
    ->set('justify-content', 'space-around') // pour les espacer proprement
    ->set('align-items', 'flex-start')       // optionnel selon ton besoin
    ->set('box-sizing', 'border-box')
    ->set('font-family', "'Playfair Display'")
    ->set('gap', '40px'); // espace entre les deux blocs


$div_produits_css = (new Args_CSS('#produits_admin_ID'))
    ->set('flex', '1') // prend 1 part de l'espace
    ->set('box-sizing', 'border-box');

$div_users_css = (new Args_CSS('#users_admin_ID'))
    ->set('flex', '1')
    ->set('box-sizing', 'border-box');



$CSS_admin =[
    $div_global_html_css,
    $div_produits_css,
    $div_users_css
]
;
?>