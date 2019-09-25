<?php
error_reporting(-1);

require_once 'classes/FirstClass.php';
require_once 'classes/Car.php';

function debug($data){ // получает некий параметр имя не должно совпадать
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$car1 = new Car();

$car1->color = 'black'; // для обращения к свойствам или методам используется '->'
$car1->brand = 'volvo';
// $car1->year = 2018; добавлен динамически, в классе свойства этого нет. так делать не желательно


$car2 = new Car();

$car2->color = 'white'; // для обращения к свойствам или методам используется '->'
$car2->brand = 'bmw';

echo $car1->getCarInfo();
echo $car2->getCarInfo();



