<?php

$header_produits = new Div('body_ID', 'body_CLS', [
    new Glob_Fields('titre_ID', 'titre_CLS', 'h1', 'Nos Produits'),
    
]);

$ajouter_panier = new Glob_Fields('ajouter_panier_ID', 'ajouter_panier_CLS', 'button', 'Ajouter au panier', '', 'ajouter_panier');


$produit_1 = new Glob_Fields(('produit1_ID'), 
'produit_CLS', 'button', [
    '<span class="prod_prix"> 30€ </span>',
    $ajouter_panier,
    '<h2>Produit 1</h2>' ,
    '<p>Description du produit 1 </p> '], '', 'produit1');

// $produit_1 = new Glob_Fields('produit1_ID', 'produit_CLS', 'button', '<span class="prod_prix"> 30€ </span>
//  <h2>Produit 1</h2> <p>Description du produit 1 </p> ');
$produit_2 = new Glob_Fields('produit2_ID', 'produit_CLS', 'button', '<span class ="prod_prix"> 20€ </span><h2>Produit 2  </h2><p>Description du produit 2 </p> ');

$produit_3 = new Glob_Fields('produit3_ID', 'produit_CLS', 'button', 

'<span class="prod_prix">10€ </span>

<h2>Produit 3</h2><p>Description du produit 3 </p> 
');



$select_by_type = new Glob_Fields('select_by_type_ID', 'select_by_type_CLS', 'select',
    '
    <option value="">Tous </option>
    <option value="serv_mobile">Serveur Mobile</option>
     <option value="serv_fixe">Serveur Fixe</option>', '', 'type');

     
$range_min_prix = new Glob_Fields('range_min_prix_ID', 'range_min_prix_CLS', 'div', 
    '<label> minimum </label>
    <input type="range" min="0" max="40" step="10" name="min_prix" value="0" id="min_prix_range_ID" class="range_CLS">
    <span id="min_prix_val_ID">0</span>', '', 'min_prix');

$range_max_prix = new Glob_Fields('range_max_prix_ID', 'range_max_prix_CLS', 'div', 
    '<label> maximum </label>
    <input type="range" min="0" max="40" step="10" name="max_prix" value="40" id="max_prix_range_ID" class="range_CLS">
    <span id="max_prix_val_ID">40</span>', '', 'max_prix');


$search_text = new Glob_Fields('search_text_ID', 'search_text_CLS', 'input', '', 'Recherche par mots-clés', 'mots_clés');

$btn_submit = new Glob_Fields('btn_submit_ID', 'btn_submit_CLS', 'div', 
    [
        new Glob_Fields('btn_submit_text_ID', 'btn_submit_text_CLS', 'button', 'Filtrer', '', 'nos_produits'),
    ])
;


$filtre = new Glob_Fields('filtre_ID', 'filtre_CLS', 'form', [
    $select_by_type,
    $range_min_prix,
    $range_max_prix,
    $search_text,
    $btn_submit,
], 
);

$div_filtre = new Div('div_filtre_ID', 'div_filtre_CLS', [
    $filtre,
]
);

$info_produit = [
    'P1' => [
        'field' => $produit_1,
        'Type' => 'Mobile',
        'Prix' => '30€',
        'Mots_clés' => 'serveur, mobile, autonome',
    ],
    'P2' => [
        'field' => $produit_2,
        'Type' => 'Fixe',
        'Prix' => '20€',
        'Mots_clés' => 'serveur, fixe, autonome',
    ],
    'P3' => [
        'field' => $produit_3,
        'Type' => 'Fixe',
        'Prix' => '10€',
        'Mots_clés' => 'serveur, pas cher, fixe, autonome',
    ]
];


$data = [];

$type_filtre = $_GET['type'] ?? '';
$min_prix = isset($_GET['min_prix']) ? (int)$_GET['min_prix'] : 0;
$max_prix = isset($_GET['max_prix']) ? (int)$_GET['max_prix'] : 1000;
$mots_cles = strtolower(trim($_GET['mots_clés'] ?? ''));

foreach ($info_produit as $produit) {
    // Type OK si vide ou égal (sans "serv_" dans filtre)
    if ($type_filtre !== '' && strtolower($produit['Type']) !== str_replace('serv_', '', $type_filtre)) {
        continue;
    }
    
    // Prix numérique entre min et max
    $prix = (int) filter_var($produit['Prix'], FILTER_SANITIZE_NUMBER_INT);
    if ($prix < $min_prix || $prix > $max_prix) {
        continue;
    }
    
    // Mots clés trouvés ou vide
    if ($mots_cles !== '' && stripos($produit['Mots_clés'], $mots_cles) === false) {
        continue;
    }
    
    // Si on arrive ici, on ajoute
    $data[] = $produit['field'];
}

// Si aucun produit ne matche
if (empty($data)) {
    $data[] = new Glob_Fields('no_result_ID', 'no_result_CLS', 'p', 'Aucun produit trouvé.');
}




$div_produits = new Div('produits_ID', 'produits_CLS', [
    $header_produits,
    $div_filtre,
    new Glob_Fields('produits_list_ID', 'produits_list_CLS', 'div', $data)
]);

$produit= $div_produits->gen_div();

?>