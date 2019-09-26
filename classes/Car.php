<?php


class Car
{
    // свойства
    public $color;
    public $wheels;
    public $speed;
    // var $brand;  из 4 версии php анлог public но использовать его не рекомендуется но может попасться
    public $brand;

    //__construct вызывается автоматически при объявлении объекта
    public function __construct($color, $wheels = 4, $speed, $brand) // название параметров (аргументы) не обяхательно
        // должно
        // совпадать
    {
        $this->color = $color; // this указывает на текущий объект
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;
    }

//public function Car($color, $wheels = 4, $speed, $brand){ // если метод назван как и класс то метод вызывается
//    // автоматически (аналог __construct) ИСПОЛЬЗОВАТЬ НЕРЕКОМЕНДУЕТСЯ
//        $this->color = $color; // this указывает на текущий объект
//        $this->wheels = $wheels;
//        $this->speed = $speed;
//        $this->brand = $brand;
//}

    public function getLorem(){ // таким методом показывает что мы можем разрывать код и это будет работать
        ?>
        <div></div>
        <?php

    }

    // метод
    public function getCarInfo(){
//        $car1 данная переменная является локальной и доступна только внутри метода и должга быть определена
        // $this является псевдопеременной и указывает на текущий класс (в данном случае) внутри него
        return "<h3>My car</h3>
            Марка: {$this->brand}<br>
            Цвет: {$this->color}<br>
            Кол-во колес: {$this->wheels}<br>
            Скорость: {$this->speed}";
    }

    public function __destruct(){ // этот метод который срабатывает при удалении объекта
        var_dump($this); // this это указывает на текущий объект
    }
}