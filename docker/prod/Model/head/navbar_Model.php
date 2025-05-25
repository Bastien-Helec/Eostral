<?php

// A propos
$li_about =  new Glob_Fields('li_about','li','li','<a href="#"> A propos </a>');

// Histoire
$li_story =  new Glob_Fields('li_story','li','li','<a href="#"> Notre Histoire </a>');


// Produits :
$Gammes = new Glob_Fields('Gammes', 'menu_produits', 'ul', [
    new Glob_Fields( 'gammes_mobiles', 'gammes_mobiles_CLS', 'li','<a href="#"> Mobiles </a>'),
    new Glob_Fields( 'gammes_serveur', 'gammes_serveur_CLS', 'li','<a href="#"> Serveur </a>'), 
]);

$ul_gammes = new Glob_Fields('ul_gammes', 'ul_cls', 'ul', [
    $Gammes,
    new Glob_Fields( '', 'l-deroulant', 'li', ['<a href= "#" > Nos Gammes </a>'
])
]);

$Produit = new Glob_Fields('Produits', 'menu_produits', 'ul', [
    $ul_gammes,
    new Glob_Fields( '', '', 'li', '<a href="#"> Nos produits </a>'),
]);

// Acceuil
$li_home =  new Glob_Fields('li_acceuil','li','li','<a href="index.php"> Acceuil </a>');

$ul_menu = new Glob_Fields('ul_menu','ul_cls','ul',[
    $li_home, 
    $Produit,
    $li_story,
    $li_about
]);

$nav = new Glob_Fields('navbar_ID', 'navbar_CLS', 'nav', [
    $ul_menu
]);

$div = new Div('div_navbar_ID', 'div_navbar_CLS',[$nav]);

$div_navbar=$div->gen_div();



?>