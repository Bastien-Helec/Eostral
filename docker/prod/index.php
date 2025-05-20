<?php

require_once "./../libs/Model/PHP/PAGES/Fields.php";
require_once "./../libs/View/Fields.php";

$test = new Glob_Fields('cc','cc','h1','Coucou');

$mytest= $test->gen_balise();

echo render_Glob_Fields($mytest);

$banner = new Glob_Fields(
    'banner', 'banner', 'div', [
        new Glob_Fields('titre', 'titre', 'h1', 'Bienvenue'),
        new Glob_Fields('soustitre', 'soustitre', 'p', 'Portail interne')
    ]
);

echo render_Glob_Fields($banner->gen_balise());


?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-prod</title>
</head>
<body>
    <h1> Coucou je suis de la pre-prod</h1>
</body>
</html> -->