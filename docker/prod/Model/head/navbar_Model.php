<?php

// A propos
$li_about =  new Glob_Fields('li_about','li','li','<a href="?a_propos"> A propos </a>');

// Histoire
$li_story =  new Glob_Fields('li_story','li','li','<a href="?notre_histoire"> Notre Histoire </a>');


// Produits :

$Produit =new Glob_Fields( '', '', 'li', '<a href="?nos_produits"> Nos produits </a>');

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