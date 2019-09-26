<?php
// домашнее задание: необходимо написать класс который будет открывать текстовый файл, записывать в него текст и
//закрывать файл

class HomeWork {
    public $open; // открытие файла
    public $write; // запись текста в файл
    public $close; // закрытие файла

    public function __construct($text){

        $this->open = fopen("text.txt", "a+"); // текущий объект открывает файл text.txt
        $this->write = fwrite($this->open, $text . PHP_EOL); // текущий объект записывает текст из аргумента $text в
        // файл text.txt с новой строки

    }



    public function __destruct()
    {
        $this->close = fclose($this->open); // текущий объект закрывает файл text.txt
    }
}
