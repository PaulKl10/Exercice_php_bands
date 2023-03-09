<?php
class Style{
    protected int $number;
    protected string $name;

    public function __construct(int $number,string $name){
        $this->number = $number;
        $this->name = $name;
    }
    public function getName(): string{
        return $this->name;
    }
    public function getNumber(): int{
        return $this->number;
    }
    public function setName($name){
        $this->name = $name;
    }
    
} 