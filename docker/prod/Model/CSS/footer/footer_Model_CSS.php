<?php

$div_foot = (new Args_CSS('#div_foot_ID'))
->set('display', 'flex')
->set('background-color', 'black')
->set('color', '#f8f9fa')
->set('font-size', '1.5em')
->set('width', '100%') 
->set('height', '40%')
->set('text-align', 'center')
->set('align-items', 'center')
->set('justify-content', 'space-around');

$div_span = (new Args_CSS('#div_foot_ID span'))
->set('margin', '10px')
->set('color', '#f8f9fa')
->set('text-decoration', 'none')
->set('transition', 'color 0.3s');

$div_span_hover = (new Args_CSS('#div_foot_ID span:hover'))
->set('font-weight', 'bold')
->set('border-radius', '5px')

;




$footer = [
    $div_foot,
    $div_span,
    $div_span_hover
]

?>