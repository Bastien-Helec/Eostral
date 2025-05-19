<?php

if(!empty ($div_data)){

    echo "<div id='{$div_data['id']}' class='{$div_data['class']}'>";
    $bouton_html = '';
    $bouton_class = '';
    
    foreach ($div_data['element'] as $element) {
        // var_dump($element);
        if ($element instanceof Logo ) {

            $data = $element->gen_logo();
            echo '<img src="'.$data['src'].'" alt="" id="'.$data['id'].'" class="'.$data['class'].'"/>';
        }

        if ($element instanceof Bouton) {
            $data = $element->create_Bouton();
            $bouton_class= $data['class'];
            $bouton_html .= "<button id='{$data['id']}'> {$data['text']} </button>";
        }
        if ($element instanceof Glob_Fields) {
            $data = $element->gen_balise();
            echo "<{$data['balise']} id='{$data['id']}' class='{$data['class']}'>{$data['text']}</{$data['balise']}>";
        }

    }

    if (!empty ($bouton_html)) {
        echo "<div class='{$bouton_class}'> {$bouton_html} </div>";
    }
    echo "</div>";

}

?>