<?php
error_reporting(-1);

require_once 'classes/FirstClass.php';
require_once 'classes/Car.php';
require_once 'classes/Homework.php';
require_once 'classes/Product.php';
require_once 'classes/NotebookProduct.php';
require_once 'classes/BookProduct.php';

function debug($data){ // получает некий параметр имя не должно совпадать
    echo '<pre>' . print_r($data, 1) . '</pre>';
}


echo Car::$countCar; // вызов статического свойства происходит через имя класса
echo '<br>';
 // вызов статического метода
echo '<br>';
$car1 = new Car('black', '4', '180', 'volvo');

//$car1->color = 'black';  для обращения к свойствам или методам используется '->'
// $car1->year = 2018; добавлен динамически, в классе свойства этого нет. так делать не желательно
echo Car::$countCar;
echo '<br>';
$car2 = new Car('white', '4', '200', 'bmw');

echo Car::$countCar;

echo $car1->getCarInfo();
echo $car2->getCarInfo();

echo $car1->getLorem();

// echo $car1::Test(); // вызывать статическим способо через :: не статические методы и свойства не рекомендуется


// $openFile = new HomeWork('strong 1'); домашнее задание


echo $car1->getPrototypeInfo();

echo CAR::TEST_CAR_SPEED; // вызов свойства-константы


// echo Car::class; // выводит имя класса полезно когда работаешь с пространством имен и будет выведено полное имя класса включая пространство имен


echo '<hr>';
echo '<h4> урок 7: наследование </h4>';


function debugs($data){ // получает некий параметр имя не должно совпадать
    echo '<pre>' . print_r($data, 1) . '</pre>';
}


$book = new BookProduct('три мушкетера', 20, 1000);
$notebook = new NotebookProduct('dell', 1000, 'intel');

 debugs($book);
 debugs($notebook);

echo $book->getProduct();
echo $notebook->getProduct();