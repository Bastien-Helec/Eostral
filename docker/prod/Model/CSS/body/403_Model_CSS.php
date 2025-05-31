<?php


$div_forbiden = (new Args_CSS("#forbiden_Div_ID"))
    ->set('flex', 'column')
    ->set('align-items', 'center')
    ->set('justify-content', 'center')
    ->set('height', '100vh')
    ->set('background-color', 'lightcyan')
    ->set('color', 'red')
    ->set('text-align', 'center');


$forbiden_css = [
    $div_forbiden,

]

?>