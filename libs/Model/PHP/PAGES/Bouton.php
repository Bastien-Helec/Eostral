<?php

class Bouton {
    private string $id;
    private string $text;
    private string $class;


    public function __construct(string $id, string $text, string $class)
    {
        $this->id=$id;
        $this->text=$text;
        $this->class=$class;
    }

    public function create_Bouton(): array {
        return [
        'id' => $this->id,
        'text' => $this->text,
        'class' =>$this->class,
        ];
    }
}

?>