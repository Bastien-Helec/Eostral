<?php

$div_a_apropos = new Div('a_propos_ID', 'a_propos_CLS', [
    new Glob_Fields('titre_ID', 'titre_CLS', 'h1', 'A propos'),
    new Glob_Fields('createur_ID', 'a_propos', 'p', 'Site créé par MDE-DEV 
    <br><br>
    Pour Eostral 
    <br><br>
    Les images , sont des images générés par IA l’utilisation de celle-ci est fortement prohibé sans l’accord de l’entreprise concerné. 
    <br><br>
    Eostral est une entreprise fictive')
]);

$a_propos = $div_a_apropos->gen_div();
?>