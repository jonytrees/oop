<?php

class Product
{
    public $name;
    public $price;



    public function __construct($name, $price) // были аршументы $cpu = null и $numpages = null - значение null было для того что эти аргументы могли не передовать значение и всегда нужны были
    {
        $this->name = $name;
        $this->price = $price;
    }



    public function getProduct(){
        return "<br><br><b>о товаре:</b><br>
        наименование: {$this->name} <br>
        цена: {$this->price}<br>";

    }


    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }
}