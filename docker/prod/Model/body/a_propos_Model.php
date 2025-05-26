<?php

$div_a_apropos = new Div('a_propos_ID', 'a_propos_CLS', [
    new Glob_Fields('titre_ID', 'titre_CLS', 'h1', 'A propos de Eostral'),
    new Glob_Fields('description_ID', 'description_CLS', 'p', 'Eostral est une entreprise innovante spécialisée dans la technologie de pointe. Notre mission est de fournir des solutions de haute qualité qui répondent aux besoins de nos clients.'),
    new Glob_Fields('mission_ID', 'mission_CLS', 'p', 'Notre mission est de révolutionner le secteur technologique en offrant des produits et services qui allient performance, fiabilité et innovation.'),
    new Glob_Fields('vision_ID', 'vision_CLS', 'p', 'Notre vision est de devenir un leader mondial dans le domaine des technologies avancées, en nous engageant à l\'excellence et à l\'innovation continue.'),
]);

$a_propos = $div_a_apropos->gen_div();
?>