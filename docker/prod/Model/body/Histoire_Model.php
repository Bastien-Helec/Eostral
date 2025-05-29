<?php

$gif_histoire = new Div('video_div_histoire_ID', 'div_histoire_CLS', [
    //gif animé
    new Glob_Fields('titre_histoire_ID', 'titre_histoire_CLS', 'h1', "L'histoire d'Eostral"),
]);

$part_1 = new Div('part_1_histoire_ID', 'part_1_histoire_CLS', [
    // Logo en background image du div (voir pdf)
    // Titre
    new Glob_Fields('titre_part1_histoire_ID', 'titre_part1_histoire_CLS', 'h2', "1. L'aurore d'un projet: Le début d'Eostral"),
    // Texte
    new Glob_Fields('texte_part1_histoire_ID', 'texte_part1_histoire_CLS', 'p', "Eostral est née d’une rencontre entre ingénieurs et designers issus de grandes écoles françaises (ENSIMAG, UTC, ENSCI), unis par une ambition : créer une technologie à visage humain. Le projet a vu le jour dans un petit espace partagé de Lyon, où, à force de nuits blanches, de débats sur l’éthique numérique et de prototypes matériels bricolés à la main, l’équipe a construit le premier serveur modulaire autonome. Ce prototype, baptisé Aether-01, était plus qu’un projet technique : il incarnait la possibilité d’un numérique sobre, souverain, et maîtrisé. À une époque dominée par les solutions centralisées, Eostral s’est engagée à redonner le pouvoir aux utilisateurs, à commencer par les TPE, les écoles, et les makers."),
]);

$part_2 = new Div('part_2_histoire_ID', 'part_2_histoire_CLS', [
    // Logo en background image du div (voir pdf)
    // Titre
    new Glob_Fields('titre_part2_histoire_ID', 'titre_part2_histoire_CLS', 'h2', "2. Une vision incarnée : souveraineté, clarté, innovation"),
    // Texte
    new Glob_Fields('texte_part2_histoire_ID', 'texte_part2_histoire_CLS', 'p', "Le nom Eostral, inspiré d’Éos – déesse de l’aurore – incarne notre engagement : faire jaillir la clarté dans un numérique obscurci par la complexité. Nos produits – téléphones-serveurs personnels, hébergement isolé, applications UI configurables – sont pensés comme des instruments de lumière : simples, beaux, puissants. Eostral repose sur trois piliers : sécurité maîtrisée, design éthique, performance responsable. Chaque interface est conçue pour être auto-hébergée, chaque élément de notre stack est documenté, chaque ligne de code peut être relue. Nous ne vendons pas du cloud : nous offrons de la compréhension et du contrôle à ceux qui veulent un numérique qui leur ressemble."),
]);

$part_3 = new Div('part_3_histoire_ID', 'part_3_histoire_CLS', [
    // Logo en background image du div (voir pdf)
    // Titre
    new Glob_Fields('titre_part3_histoire_ID', 'titre_part3_histoire_CLS', 'h2', "3. Vers demain : construire un monde numérique à visage humain"),
    // Texte
    new Glob_Fields('texte_part3_histoire_ID', 'texte_part3_histoire_CLS', 'p', "Aujourd’hui, Eostral accompagne des structures variées : écoles rurales cherchant à héberger elles-mêmes leurs données, créateurs digitaux voulant échapper aux plateformes fermées, ou encore start-ups soucieuses d’intégrer un hébergement local et éthique. Mais ce n’est qu’un début. Demain, nous voulons bâtir un écosystème complet : matériel libre, applications interopérables, et un espace collaboratif où chacun peut contribuer. Nous croyons en un futur où la technologie est proche, visible, élégante, et nous avançons chaque jour comme Éos sur son char, traçant une voie dans le ciel numérique."),
]);


$div_histoire = new Div('histoire_ID', 'histoire_CLS', [
    $gif_histoire,
    $part_1,
    $part_2,
    $part_3
]);

$histoire = $div_histoire->gen_div();

?>