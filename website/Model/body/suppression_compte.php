<?php
    // On supprime a partir via l'ID de l'utilisateur
    $delete = new Delete_SQL('User');
    $delete->execute_Simple_SQL('ID = "'.$_SESSION['id'].'"' , $pdo_cnx);
    // On supprime la session
    session_unset();
    session_destroy();
?>