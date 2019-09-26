<?php
error_reporting(-1);

require_once 'classes/FirstClass.php';
require_once 'classes/Car.php';
require_once 'classes/Homework.php';

function debug($data){ // получает некий параметр имя не должно совпадать
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$car1 = new Car('black', '4', '180', 'volvo');

//$car1->color = 'black';  для обращения к свойствам или методам используется '->'
// $car1->year = 2018; добавлен динамически, в классе свойства этого нет. так делать не желательно


$car2 = new Car('white', '4', '200', 'bmw');


echo $car1->getCarInfo();
echo $car2->getCarInfo();

echo $car1->getLorem();


$openFile = new HomeWork('strong 1');




