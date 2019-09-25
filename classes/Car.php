<?php


class Car
{
    // свойства
    public $color;
    public $wheels = 4;
    public $speed = 180;
    // var $brand;  из 4 версии php анлог public но использовать его не рекомендуется но может попасться
    public $brand;

    // метод
    public function getCarInfo(){
//        $car1 данная переменная является локальной и доступна только внутри метода и должга быть определена
        // $this является псевдопеременной и указывает на текущий класс (в данном случае) внутри него
        return "<h3>My car</h3>
            Марка: {$this->brand}<br>
            Цает: {$this->color}<br>
            Кол-во колес: {$this->wheels}<br>
            Скорость: {$this->speed}";
    }
}