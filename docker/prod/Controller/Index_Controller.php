<?php

require_once "Model/Model.php";
require_once "View/header/header_view.php";
require_once "View/header/navbar_view.php";

if (empty($_GET)){
    require_once "View/body/acceuil_view.php";
}
if (isset($_GET['nos_produits'])){
require_once "View/body/produits_view.php";
}
if (isset($_GET['notre_histoire'])){
    require_once "View/body/histoire_view.php";
}
if (isset($_GET['a_propos'])){
    require_once "View/body/a_propos_view.php";
}

require_once "View/footer/footer_view.php";
?>