<?php

$body = (new Args_CSS('#produits_ID'))
    ->set('font-family', '"PlayFair", serif')
    ->set('position', 'relative')
    ->set('box-sizing', 'border-box');

$div_filtre = (new Args_CSS('#div_filtre_ID'))
    ->set('position', 'absolute')               // à ajuster si tu as un header
    ->set('left', '20px')
    ->set('width', '260px')
    ->set('background-color', '#fff')
    ->set('padding', '15px')
    ->set('box-shadow', '0 0 10px rgba(0,0,0,0.1)')
    ->set('border-radius', '10px');

$filtre = (new Args_CSS('#filtre_ID'))
    ->set('display', 'flex')
    ->set('flex-direction', 'column')
    ->set('gap', '10px')
    ->set('margin', '10px 0'); // un peu d’espace vertical

$produits_list = (new Args_CSS('#produits_list_ID'))
    ->set('max-width', '900px')
    ->set('padding-left', '100px')
    ->set('margin', '100px auto 40px')  // marge top = espace sous filtre fixe
    ->set('display', 'flex')
    ->set('flex-direction', 'column')
    ->set('font-size', '1.5em')
    ->set('gap', '20px');

$produit_content = (new Args_CSS('#produit_ID'))
    ->set('border', '1px solid #ccc')
    ->set('width','100%')
    ->set('border-radius', '35px')
    ->set('padding', '10px')
    ->set('background-color', '#f9f9f9')
    ->set('box-shadow', '0 2px 4px rgba(0, 0, 0, 0.1)')
    ->set('transition', 'transform 0.2s')
    ->set('margin', '10px 0');

$titre = (new Args_CSS('#titre_ID'))
    ->set('font-size', '4em')
    ->set('color', '#F8F9FA')
    ->set('text-align', 'center')
    ->set('margin-top', '40px');

$search_titre_list = (new Args_CSS( '#titre_ID, #produits_list_ID'))
    ->set('display', 'flex')
    ->set('flex-direction', 'column')
    ->set('align-items', 'center')
    ->set('justify-content', 'center');

$search = (new Args_CSS('#search_text_ID'))
    ->set('color', '#A1A1A1')
    ->set('text-align', 'center')
    ->set('border-radius', '20px');

$prod_prix = (new Args_CSS('.prod_prix'))
    ->set('color', '#FF5733') // couleur pour le prix
    ->set('font-weight', 'bold')
    ->set('position','relative')
    ->set('left', '90%')
    ->set('font-size', '1.5em');

$produit=(new Args_CSS('.produit_CLS'))
->set('color','#5A7FA6');

$produit_hover = (new Args_CSS('.produit_CLS:hover'))
    ->set('background-color', 'black') // couleur de fond au survol
    ->set('color', 'black') // couleur du texte au survol
    ->set('transform', 'scale(1.02)') // effet de zoom au survol
    ->set('box-shadow', '0 4px 8px rgba(0, 0, 0, 0.2)'); // ombre portée au survol

$button_submit = (new Args_CSS('#btn_submit_text_ID'))
->set('background-color', '#5A7FA6') // couleur de fond du bouton
->set('color', '#F8F9FA');

$button_submithover = (new Args_CSS('#btn_submit_text_ID:hover'))
    ->set('background-color', '#F8F9FA') // couleur de fond du bouton au survol
    ->set('color', '#5A7FA6'); // couleur du texte du bouton au survol

$ajouter_panier = (new Args_CSS('.ajouter_panier_CLS'))
    ->set('position', 'relative') 
    ->set('left', '60%') // positionne le bouton à droite du produit
    ->set('background-color', '#FFD1A9') // couleur de fond du bouton
    ->set('color', '#5A7FA6') // couleur du texte du bouton
    ->set('border', 'none')
    ->set('padding', '10px 20px')
    ->set('border-radius', '5px')
    ->set('cursor', 'pointer');

$ajouter_panier_hover = (new Args_CSS('#ajouter_panier_ID:hover'))
    ->set('background-color', '#5A7FA6') // couleur de fond du bouton au survol
    ->set('color', '#F8F9FA') // couleur du texte du bouton au survol
    ->set('transform', 'scale(1.05)') // effet de zoom au survol
    ->set('box-shadow', '0 4px 8px rgba(0, 0, 0, 0.2)'); // ombre portée au survol

$produit_css = [
    $body,
    $div_filtre,
    $filtre,
    $produits_list,
    $produit_content,
    $titre,
    $search_titre_list,
    $search,
    $prod_prix,
    $produit,
    $produit_hover,
    $button_submit,
    $button_submithover,
    $ajouter_panier,
    $ajouter_panier_hover
];

?>
