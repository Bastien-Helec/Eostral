<?php
require_once "../libs/Model/PHP/PAGES/Bouton.php";
require_once "../libs/Model/PHP/PAGES/Logo.php";
require_once "../libs/Model/PHP/PAGES/Div.php";
require_once "../libs/Model/PHP/PAGES/Fields.php";
require_once "../libs/Model/PHP/FORMULAIRES/FRONT/ListeBDD.php";
require_once "./../libs/Model/PHP/BDD/SQL/Select.php";
require_once "../libs/Model/PHP/BDD/SQL/Insert.php";
require_once "pdo.php";
require_once "../libs/Model/PHP/BDD/SQL/Update.php";
require_once "../libs/Model/PHP/BDD/SQL/Delete.php";


require_once "head/header_Model.php";
require_once "head/navbar_Model.php";

require_once "body/Acceuil_Model.php";
require_once "body/Produits_Model.php";
require_once "body/Histoire_Model.php";
require_once "body/a_propos_Model.php";
require_once "body/compte_Model.php";

require_once "body/admin_Model.php";
require_once "body/403_Model.php";


require_once "footer/footer_Model.php";

$banner = (new Glob_Fields('banner', 'banner', 'div', '') )->gen_balise();


?>