<?php

/** Champs du formulaire qui ne sont pas des listes 
*/

require_once 'FormElement.php';


class Fields implements FormElement {

    private string $nom;
    private string $type;
    private string $placeholder;
    private bool $requis;

    public function __construct(string $nom, string $type, string $placeholder, bool $requis) {
        $this->nom = $nom;
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->requis = $requis;
    }

    public function getNom(): string {
        return $this->nom;
    }
    public function getType(): string {
        return $this->type;
    }
    public function getPlaceholder(): string {
        return $this->placeholder;
    }

    public function getRequis(): bool {
        return $this->requis;
    }

    public function setNom(string $nom): void {
        $this->nom = $nom;
    }

    public function setType(string $type): void {
        $this->type = $type;
    }

    public function setPlaceholder(string $placeholder): void {
        $this->placeholder = $placeholder;
    }

    public function setRequis(bool $requis): void {
        $this->requis = $requis;
    }

   public function CreateField(string $idFormulaire): array {
    return [
        'idFormulaire' => $idFormulaire,
        'nom' => $this->nom,
        'type' => $this->type,
        'placeholder' => $this->placeholder,
        'requis' => $this->requis
    ];
}

    // Pour interagir avec le formulaire
    public function getData(): array {
        return [
            'nom' => $this->nom,
            'type' => $this->type,
            'placeholder' => $this->placeholder,
            'requis' => $this->requis
        ];
    }
}
?>