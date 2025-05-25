<?php

require_once "./../../libs/Model/CSS/PAGES/Args_CSS.php";
require_once "Global_CSS.php";
require_once "CSS/head/header_Model_CSS.php";
require_once "CSS/head/navbar_Model_CSS.php";

$global = [
];


foreach ($global as $css) {
    echo $css->gen_css();
}
?>