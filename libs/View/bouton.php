<?php


if(!empty($boutons)){
    // var_dump($boutons);
    
    foreach ($boutons as $btns){
        $data= $btns->create_bouton();
        echo "<button id='{$data['id']}'> {$data['text']} </button>";

    }
} else {
    echo "Une erreur c'est produite";
}


?>
