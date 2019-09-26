<?php


class NotebookProduct extends Product
{

    public $cpu;

    public function __construct($name, $price, $cpu)
    {
        parent::__construct($name, $price); // наследовает родительского метода с аргументами
        $this->cpu = $cpu;
    }

    public function getProduct(){
        $out = parent::getProduct(); // вызов родительского метода
        $out .= "процессор: {$this->cpu}<br>";
        return $out;

    }

    public function getCpu()
    {
        return $this->cpu;
    }

}