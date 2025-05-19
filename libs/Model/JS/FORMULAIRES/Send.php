<?php

class Send {
    private string $id_form;
    private string $path;


    public function __construct(string $id_form, string $path) {
        $this->id_form = $id_form;
        $this->path = $path;
    }

    public function Send(){
        echo "
        document.addEventListener('DOMContentLoaded', function() {

            if (document.getElementById('{$this->id_form}') && document.getElementById('{$this->id_form}').tagName === 'FORM') {
                document.getElementById('{$this->id_form}').addEventListener('submit', function(event) {
                    event.preventDefault();
                    var Form_Data = new FormData(this);
                    let data = {};
                    
                    var requete = new XMLHttpRequest();
                    requete.open('POST', '{$this->path}', true);
                    requete.onload = function() {
                        if (requete.status === 200) {
                            var response = JSON.parse(requete.responseText);
                            console.log(response);
                            const banner = document.getElementById(response['banner']['id']);
                            banner.textContent = response['banner']['message'];
                            banner.classList.add('actif');
                        } else {
                            console.error('Erreur de la requête : ' + requete.status + ' ' + requete.responseText);
                        }
                    };
                    requete.send(Form_Data);
                });
            } else {
                console.error('Erreur: L\'élément avec l\'id {$this->id_form} n\'existe pas ou n\'est pas un formulaire.');
            }
        });
        ";
    }


}


?>