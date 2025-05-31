<?php

$header_produits = new Div('body_ID', 'body_CLS', [
    new Glob_Fields('titre_ID', 'titre_CLS', 'h1', 'Nos Produits'),
    
]);


// Generation des produits par BDD

$produits_select = new SQL_SELECT ('type.libelle as type, Nom, Prix, Model, Prix, Description,MotsCles' , 'Produits');

$produit=$produits_select->execute_Cmplx_fetchAll_SQL('JOIN Type type ON Produits.IDType = type.ID ', $pdo_cnx);

// Commence a faire nos affichage de produits 


$info_produit = [];

foreach ($produit as $produit) { // ← tableau brut, pas des objets Glob_Fields
    $info_produit[] = [
        'Nom' => $produit['Nom'],
        'Description' => $produit['Description'],
        'Model' => $produit['Model'],
        'Type' => $produit['type'],
        'Prix' => $produit['Prix'],
        'MotsCles' => strtolower($produit['MotsCles']),
    ];
}


// var_dump($produit); // Pour debug, à enlever en prod
// var_dump($info_produit); // Pour debug, à enlever en prod

// FILTRE


$select_by_type = new Glob_Fields('select_by_type_ID', 'select_by_type_CLS', 'select',
    '
    <option value="">Tous </option>
    <option value="serveur mobile">Serveur Mobile</option>
     <option value="serveur">Serveur</option>', '', 'type');

     
$range_min_prix = new Glob_Fields('range_min_prix_ID', 'range_min_prix_CLS', 'div', 
    '<label> minimum </label>
    <input type="range" min="0" max="40" step="10" name="min_prix" value="0" id="min_prix_range_ID" class="range_CLS">
    <span id="min_prix_val_ID">0</span>', '', 'min_prix');

$range_max_prix = new Glob_Fields('range_max_prix_ID', 'range_max_prix_CLS', 'div', 
    '<label> maximum </label>
    <input type="range" min="0" max="4000" step="10" name="max_prix" value="4000" id="max_prix_range_ID" class="range_CLS">
    <span id="max_prix_val_ID">4000</span>', '', 'max_prix');


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



// Uttilisation du filtre

$data = [];

$type_filtre = $_GET['type'] ?? '';
$min_prix = isset($_GET['min_prix']) ? (int)$_GET['min_prix'] : 0;
$max_prix = isset($_GET['max_prix']) ? (int)$_GET['max_prix'] : 10000;
$mots_cles = strtolower(trim($_GET['mots_clés'] ?? ''));

$data = [];

$data = [];

foreach ($info_produit as $item) {
    if ($type_filtre !== '' && strtolower($item['Type']) !== str_replace('serv_', '', $type_filtre)) {
        continue;
    }

    $prix = (int) filter_var($item['Prix'], FILTER_SANITIZE_NUMBER_INT);
    if ($prix < $min_prix || $prix > $max_prix) {
        continue;
    }

    if ($mots_cles !== '' && stripos($item['MotsCles'], $mots_cles) === false) {
        continue;
    }

    // === CONSTRUCTION DES CHAMPS ===
    $span_prix = new Glob_Fields('', 'prod_prix', 'span', [' ' . $item["Prix"] .'€']);

    $prod_titre_desc = new Glob_Fields('prod_titre_desc_ID', 'prod_titre_desc_CLS', 'div', [
        new Glob_Fields('titre_produit_ID', 'titre_produit_CLS', 'h2', $item['Nom']),
        new Glob_Fields('desc_produit_ID', 'desc_produit_CLS', 'p', $item['Description']),
    ], '', 'produit_desc');


    $produit_field = new Glob_Fields('produit_ID', 'produit_CLS', 'a', [
        $prod_titre_desc,
        $span_prix,
    ], '', 'produit');

    $data[] = $produit_field;
}

if (empty($data)) {
    $data[] = new Glob_Fields('no_result_ID', 'no_result_CLS', 'p', 'Aucun produit trouvé.');
}




// Generation de la page

$div_produits = new Div('produits_ID', 'produits_CLS', [
    $header_produits,
    $div_filtre,
    new Glob_Fields('produits_list_ID', 'produits_list_CLS', 'div', $data)
]);

$produit= $div_produits->gen_div();

?>