<?php
/**
 * Created by PhpStorm.
 * User: evgenijanuskevic
 * Date: 2019-09-26
 * Time: 21:23
 */

class BookProduct extends Product
{

    public $numPages;

    public function __construct($name, $price, $numPages)
    {
        parent::__construct($name, $price); // наследовает родительского метода с аргументами
        $this->numPages = $numPages;
        $this->setDiscount(5);

    }

    public function getProduct(){
        $out = parent::getProduct(); // вызов родительского метода
        $out .= "цена без скидки: {$this->price}<br>";
        $out .= "кол-во страниц: {$this->numPages}<br>";
        $out .= "скидка: {$this->getDiscount()}%<br>";
        return $out;

    }


    public function getNumPages()
    {
        return $this->numPages;
    }

}