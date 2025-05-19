<?php

class Glob_Fields{
    private string $id;
    private string $class;
    private string $balise;
    private string $text;

    public function __construct(string $id, string $class, string $balise, string $text) {
        $this->id = $id;
        $this->class = $class;
        $this->balise = $balise;
        $this->text = $text;
    }

    public function gen_balise() : array {
        return 
        [
            'id'=>$this->id,
            'class'=>$this->class,
            'balise'=>$this->balise,
            'text'=>$this->text            
        ];
    }
}



?>