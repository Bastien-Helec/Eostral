<?php

$div_compte_css = (new Args_CSS('#Compte_ID'))
->set('display', 'flex')
->set('flex-direction', 'column')
->set('align-items', 'center')
->set('text-align', 'center')
->set('font-family', 'Playfair, serif')
->set('justify-content', 'center')
->set('font-size', '2rem') 
->set('color', '#F8F9FA')
;

$css_compte = [
    $div_compte_css,
];
?>