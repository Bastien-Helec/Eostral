<?php

// Global
$pages = (new Args_CSS('*'))
    ->set('margin', '0')
    ->set('padding', '0')
    ->set('box-sizing', 'border-box');

$body = (new Args_CSS('body'))
    ->set('justify-content', 'center')
    ->set('align-items', 'center')
    ->set('padding', '0');

$h1 = (new Args_CSS('h1'))
    ->set('font-size', '2.5rem');

$formulaire = (new Args_CSS('.Formulaire'))
    ->set('align-items', 'center')
    ->set('display','none')
    ->set('position','absolute')
    ->set('top', '30%')
    ->set('left', '50%')
    ->set('background-color', '#f8f9fa')
    ->set('padding', '20px')
    ->set('box-shadow','0 5px 15px rgba(0, 0, 0, 0.2)')
    ->set('border-radius', '8px')
    ->set('width', '300px')
    ->set('opacity', '0')
    ->set('visibility', 'hidden')
    ->set('z-index', '50')
    ->set('transform', 'translate(-50%, -50%)')
    ->set('transition', 'all 1s ease');

$form_actif = (new Args_CSS('.Formulaire.actif'))
    ->set('opacity', '1')
    ->set('top', '50%')
    ->set('visibility', 'visible');

$form_h2 = (new Args_CSS('.Formulaire h2'))
    ->set('margin-bottom', '0 0 15px');

$form_input = (new Args_CSS('.Formulaire input'))
    ->set('width', '95%')
    ->set('padding', '10px')
    ->set('margin-bottom', '10px')
    ->set('border', '1px solid #ddd')
    ->set('border-radius', '4px');

// Logo
$logo = (new Args_CSS('.logo'))
    ->set('max-width', '300px');

$bouton = (new Args_CSS('button'))
    ->set('all', 'unset')
    ->set('font-size', '16px')
    ->set('padding', '10px 20px')
    ->set('color', '#5A7FA6')
    ->set('border-radius', '5px')
    ->set('cursor', 'pointer')
    ->set('transition', 'all 0.3s ease');

$bouton_hover = (new Args_CSS('button:hover'))
    ->set('background-color', '#5A7FA6')
    ->set('color', '#F8F9FA');


$select = (new Args_CSS('.select'))
    ->set('position', 'relative')
    ->set('bottom', '10%')
    ->set('width', '100%')
    ->set('max-width', '300px');

$select_ul = (new Args_CSS('.select ul'))
    ->set('position', 'absolute')
    ->set('left', '0')
    ->set('width','100%')
    ->set('list-style-type', 'none')
    ->set('background-color', '#f8f9fa')
    ->set('border-radius', '4px')
    ->set('display', 'none')
    ->set('z-index', '1000')
    ->set('max-height', '150px')
    ->set('overflow-y', 'auto')
    ->set('box-shadow', '0 2px 10px rgba(0, 0, 0, 0.2)');

$select_ul_li = (new Args_CSS('.select ul li'))
    ->set('padding', '10px')
    ->set('cursor', 'pointer')
    ->set('color', '#33295E')
    ->set('transition', 'background-color 0.3s ease');

$select_ul_li_hover = (new Args_CSS('.select ul li:hover'))
    ->set('background-color', '#33295E')
    ->set('color', '#f8f9fa');

$select_actf_ul = (new Args_CSS('.select.actif ul'))
    ->set('display', 'block');

$a_reset = (new Args_CSS('a'))
    ->set('text-decoration', 'none')
    ->set('color', 'inherit');



$banner = (new Args_CSS('#banner'))
    ->set('font-size', '1.2rem')
    ->set('position', 'fixed')
    ->set('bottom', '20px')
    ->set('right','0')
    ->set('max-width', '350px')
    ->set('background-color', '#5A7FA6')
    ->set('color', '#f8f9fa')
    ->set('text-align', 'center')
    ->set('padding', '10px 20px')
    ->set('box-shadow', '0 5px 15px rgba(0, 0, 0, 0.2)')
    ->set('transition', 'transform 0.5s ease')
    ->set('transform', 'translateX(110%)');

$banner_actif = (new Args_CSS('#banner.actif'))
    ->set('z-index', '1000')
    ->set('transform', 'translateX(0)');


$global = [
    $pages,
    $body,
    $h1,
    $formulaire,
    $form_actif,
    $form_h2,
    $form_input,
    $logo,
    $bouton,
    $bouton_hover,
    $select,
    $select_ul,
    $select_ul_li,
    $select_ul_li_hover,
    $select_actf_ul,
    $a_reset,
    $banner,
    $banner_actif
];



?>