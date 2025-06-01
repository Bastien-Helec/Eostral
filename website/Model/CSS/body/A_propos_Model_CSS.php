<?php

$div_apropos = (new Args_CSS('#div_a_propos_ID'))
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


$titre_apropos= (new Args_CSS('#a_propos_titre_ID'))
->set('display', 'flex')
->set('font-size', '5rem')
->set('position', 'relative')
->set('top', '-20%')
->set('margin', '0 0 20px')
->set('font-weight', 'bold')
->set('text-shadow', '2px 2px 4px rgba(0, 0, 0, 0.5)');

$createur_apropos = (new Args_CSS('.a_propos'))
->set('display', 'flex')
->set('position', 'relative')
->set('top', '-10%')
->set('font-size', '3rem')
->set('margin', '0 0 20px')
->set('text-shadow', '2px 2px 4px rgba(0, 0, 0, 0.5)');




$about_css = [
    $div_apropos,
    $titre_apropos,
    $createur_apropos
];


?>