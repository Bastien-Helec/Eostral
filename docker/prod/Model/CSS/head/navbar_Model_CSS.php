<?php

$div_navbar = (new Args_CSS('#div_navbar_ID'))
->set('width','100%')

// neumorphism avant pas de modification sur le haut et plus prononcé sur le bas
->set('box-shadow', '0 4px 2px rgba(0, 0, 0, 0.32), 0 6px 20px rgba(0, 0, 0, 0.1)')
->set('background-color', '#5A7FA6');

$navbar_menu = (new Args_CSS('#navbar_ID #ul_menu'))
->set('display', 'flex')
->set('justify-content', 'space-around')
->set('list-style', 'none')
->set('padding', '0');

$menu_IDto_li_a = (new Args_CSS('#ul_menu > li a'))
->set('color', '#f8f9fa')
->set('text-decoration','none')
->set('padding','10px 15px')
->set('display', 'block')
->set('font-size', '1.5em')
->set('transition', 'background 0.3s');

$menu_IDto_lito_ahover = (new Args_CSS('#ul_menu > li > a:hover'))
->set('background-color', '#F8F9FA')
->set('color','#1A1A1A')
->set('border-radius', '5px');





$navbar=[
    $div_navbar,
    $navbar_menu,
    $menu_IDto_li_a,
    $menu_IDto_lito_ahover,

]

?>