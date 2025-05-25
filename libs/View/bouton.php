<?php

function render_bouton($boutons) {
    $html = '';

    if (!empty($boutons)) {
        // On peut recevoir un tableau d’objets Bouton
        foreach ($boutons as $bouton) {
            if ($bouton instanceof Bouton) {
                $data = $bouton->gen_Bouton();

                // Si bouton simple (pas d’enfants)
                if (!isset($data['children'])) {
                    $html .= "<button id='{$data['id']}' class='{$data['class']}'>{$data['text']}</button>";
                } 
                // Si bouton groupe (avec enfants)
                elseif ($boutons instanceof Glob_Fields) {
                    $html .= render_Glob_Fields($boutons->gen_balise()); // ✅ appel propre
                }
                elseif ($boutons instanceof Div) {
                    $html .= render_element_DIV($boutons->gen_div()); // ✅ récursion propre
                }
            } else {
                // Gérer cas erreur si élément pas instance de Bouton
                $html .= "<!-- Élément non Bouton détecté -->";
            }
        }
    } else {
        $html .= "Une erreur c'est produite";
    }

    return $html;
}
?>
