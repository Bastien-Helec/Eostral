<?php

$div_foot = new Div('div_foot_ID', 'div_foot_CLS', [
    new Glob_Fields('a_propos_ID', 'a_propos_CLS', 'span', '<a href="?a_propos"> A propos </a>'),
    new Glob_Fields('contact_ID', 'contact_CLS', 'span', '<a href="#">Contact </a>'),
    new Glob_Fields('nos_contribution_ID', 'nos_contribution_CLS', 'span', '<a href="#">Nos Contributions </a>'),
    new Glob_Fields('nos_partenaire_ID', 'nos_partenaire_CLS', 'span', '<a href="#" >Nos Partenaires </a>')
]);

$footer = $div_foot->gen_div();

?>