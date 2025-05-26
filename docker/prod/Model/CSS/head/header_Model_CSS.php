<?php

$cnx_logo = (new Args_CSS('#cnx_logo_ID'))
->set('background-color', '#A1A1A1')
->set('width', '100px')
->set('height', '100px') // fixe une hauteur pour un centrage vertical efficace
->set('position', 'relative')
->set('left', '15%') // centre horizontalement
->set('border-radius', '150px');


$cnx_txt = (new Args_CSS('#cnx_txt_ID'))
->set('color', 'black')
->set('font-size', '1.5em')
->set('text-align', 'center');

$cnx_header = (new Args_CSS('#cnx_header_ID'))
// Mettre a droite tout le contenu a droite de la page
->set('position', 'absolute')
->set('right', '0%')
->set('padding', '10px')
;

$header_logo= (new Args_CSS('.logo'))
->set('width', '230px')
->set('height', 'auto');


$head = (new Args_CSS('#head_ID'))
->set('display', 'flex')
->set('align-items', 'center')
->set('justify-content', 'center')
->set('padding', '0')     // padding interne
->set('margin', '0')      // margin externe
->set('width', '100vw')   // s'assure que le header fait toute la largeur
->set('background-color', '#FFD1A9');

$header_eostral = (new Args_CSS('#head_eostral_ID'))
->set('padding', '0')
->set('margin', '0');



$header = [
    $body,
    $header_logo,
    $cnx_logo,
    $cnx_txt,
    $cnx_header,
    $head,
    $header_eostral,
]


?>