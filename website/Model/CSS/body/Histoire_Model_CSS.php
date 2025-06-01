<?php

$body = (new Args_CSS('body'))
    ->set('background-color', '#A1A1A1');

    
    $titre_histoire_ID = (new Args_CSS('#titre_histoire_ID'))
    ->set('font-size', '5rem')
    ->set('background-image', 'url(./../View/Histoire.gif)')
    ->set('margin', '20px 0')
    ->set('text-align', 'center')
    ->set('color', '#F8F9FA')
    ->set('font-weight', 'bold')
    ->set('text-shadow', '2px 2px 4px rgba(0, 0, 0, 0.5)')
    ->set('width', '100%')
    ->set('height', '100%')
    ->set('background-size', 'cover')
    ->set('background-repeat', 'no-repeat')
    ->set('align-items', 'center')
    ->set('justify-content', 'center')
    ->set('background-position', 'center')

    ->set('font-family', '"Great Vibes", serif');
    
    $display_div = (new Args_CSS('#part_1_histoire_ID, #part_2_histoire_ID, #part_3_histoire_ID'))
    ->set('display', 'flex')
    ->set('color', '#F8F9FA')
    ->set('flex-wrap', 'wrap')
    ->set('flex-direction', 'column')
    ->set('align-items', 'center')
    ->set('height', '50%')
    ->set('justify-content', 'center')
    ->set('margin', ' 20px 0');


$part_1_histoire = (new Args_CSS('#part_1_histoire_ID'))
    ->set('display', 'flex')    
    ->set('color', '#F8F9FA')
    ->set('flex-direction', 'column')
    ->set('align-items', 'center')
    ->set('justify-content', 'center')
    ->set('background-image', 'url(./../View/Histoire_part_1.png)')
    ->set('background-size', 'cover')
    ->set('background-position', 'center')
    ->set('background-repeat', 'no-repeat');


$part_2_histoire = (new Args_CSS('#part_2_histoire_ID'))
    ->set('display', 'flex')

    ->set('flex-direction', 'column')
    ->set('align-items', 'center')
    ->set('justify-content', 'center')
->set('background-image', 'url(./../View/Histoire_part_2.png)')
->set('background-position', 'center')
->set('background-size', 'cover')
->set('background-repeat', 'no-repeat')
    ;


$part_3_histoire = (new Args_CSS('#part_3_histoire_ID'))
    ->set('display', 'flex')
    ->set('flex-direction', 'column')
    ->set('align-items', 'center')
    ->set('justify-content', 'center')
    
    ->set('background-image', 'url(./../View/Histoire_part_3.png)')
    ->set('background-size', 'cover')
    ->set('background-position', 'center')
    ->set('background-repeat', 'no-repeat');

$titre_part = (new Args_CSS('#titre_part1_histoire_ID, #titre_part2_histoire_ID, #titre_part3_histoire_ID'))
    ->set('font-size', '4rem')
    ->set('color', '#F8F9FA')
    ->set('text-align', 'center')
    ->set('margin', '10px 0')
    ->set('text-shadow', '2px 2px 4px rgba(0, 0, 0, 0.5)')
    ->set('font-family', '"Great Vibes", serif');

$text_part= (new Args_CSS('#texte_part1_histoire_ID, #texte_part2_histoire_ID, #texte_part3_histoire_ID'))
    ->set('font-size', '1.8rem')
    ->set('color', '#F8F9FA')
    ->set('text-align', 'center')
    ->set('margin', '10px 0')
    ->set('text-shadow', '6px 6px 6px rgb(0, 0, 0)')
    ->set('font-family', '"Playfair", serif');


$css_histoire = [
    $titre_histoire_ID,
    $body,
    $display_div,
    $part_1_histoire,
    $part_2_histoire,
    $part_3_histoire,
    $titre_part,
    $text_part
];

?>