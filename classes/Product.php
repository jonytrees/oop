<?php

class Product
{
    public $name;
    protected $price;


    private $discount = 0;

//    public $public = 'public'; // доступен отовсюду
//    protected $protected = 'protected'; // доступны только в ком классе где объявлены и в дочерних классах
//    private $private = 'private'; // доступен только в том классе где объявлен


    public function __construct($name, $price) // были аршументы $cpu = null и $numpages = null - значение null было для того что эти аргументы могли не передовать значение и всегда нужны были
    {
        $this->name = $name;
        $this->price = $price;

    }



    public function getProduct(){
        return "<br><br><b>о товаре:</b><br>
        наименование: {$this->name} <br>
        цена со скидкой: {$this->getPrice()}<br>";

    }


    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price - ($this->discount / 100 * $this->price);
    }


    public function getDiscount() // get - получать, возвращать, через него получаем доступ к  закрытому и защищенному свойствам (protected и private)
    {
        return $this->discount;
    }


    public function setDiscount($discount) // set - устанавливать, через него получаем доступ к  закрытому и защищенному свойствам (protected и private)
    {
        $this->discount = $discount;
    }
}