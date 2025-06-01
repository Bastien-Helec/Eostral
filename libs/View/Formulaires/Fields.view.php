<?php
// Affichage du Field
if (!empty($fields)) {
    foreach ($fields as $Field) {
        $requis = ($Field['requis'] === 'requis') ? 'required' : '';

        // Ajout de l'attribut value si présent
        $value = isset($Field['value']) && $Field['value'] !== null ? 'value="' . htmlspecialchars($Field['value']) . '"' : '';

        echo '<input type="' . htmlspecialchars($Field['type']) . '" name="' . $idFormulaire . '_' . htmlspecialchars($Field['nom']) . '" placeholder="' . htmlspecialchars($Field['placeholder']) . '"value='.$value.'' . $requis . '>';
    }
}
?>
