<?php
// Affichage du Field
if (!empty($fields)) {
    foreach ($fields as $Field) {
        $requis = ($Field['requis'] === 'requis') ? 'required' : '';
        echo '<input type="' . htmlspecialchars($Field['type']) . '" name="' . $idFormulaire . '_' . htmlspecialchars($Field['nom']) . '" placeholder="' . htmlspecialchars($Field['placeholder']) . '" ' . $requis . '>';
    }
}
?>
