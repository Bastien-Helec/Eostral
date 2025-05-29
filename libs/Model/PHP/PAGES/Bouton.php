<?php

class Bouton {
    private string $id;
    private string $text;
    private string $class;

    /** @var array<Bouton> */
    private array $element;

    private string $type;

    public function __construct(string $id, string $text = '', string $class = '', array $element = [] , string $type ='') {
        $this->id = $id;
        $this->text = $text;
        $this->class = $class;
        $this->element = $element;
        $this->type = $type;
    }

    public function gen_Bouton(): array {
        return 
        [
            'id'=>$this->id,
            'class'=>$this->class,
            'text' => $this->text,
            'element'=>$this->element,
            'type' => $this->type    
        ];

    }
}

?>