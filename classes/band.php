<?php

class Band {
    private string $name;
    private int $creation;
    private int $style_int;


    public function __construct(string $name, int $creation, int $style_int){
        $this->name = $name;
        $this->creation = $creation;
        $this->style_int = $style_int;
    }
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
    
    public function getCreation(){
        return $this->creation;
    }
    public function getStyle_int(){
        return $this->style_int;
    }
    public function setCreation($creation){
        $this->creation = $creation;
    } 
} 
