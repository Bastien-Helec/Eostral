<?php

$div_a_apropos = new Div('div_a_propos_ID', 'a_propos_CLS', [
    new Glob_Fields('a_propos_titre_ID', 'titre_CLS', 'h1', 'A propos'),
    new Glob_Fields('createur_ID', 'a_propos', 'h2', 'Site créé par MDE-DEV 
    <br>
    <br>
    Pour Eostral 
    <br><br>
    Les images , sont des images générés par intelligence artificielle l’utilisation de celle-ci est fortement prohibé sans l’accord de l’entreprise concerné. 
    <br><br>
    Eostral est une entreprise fictive')
]);

$a_propos = $div_a_apropos->gen_div();
?>