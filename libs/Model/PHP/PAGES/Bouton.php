<?php

class Bouton {
    private string $id;
    private string $text;
    private string $class;

    /** @var array<Bouton> */
    private array $element;

    public function __construct(string $id, string $text = '', string $class = '', array $element = []) {
        $this->id = $id;
        $this->text = $text;
        $this->class = $class;
        $this->element = $element;
    }

    public function gen_Bouton(): array {
        return 
        [
            'id'=>$this->id,
            'class'=>$this->class,
            'text' => $this->text,
            'element'=>$this->element            
        ];

    }
}

?>