<?php

use Fruit as GlobalFruit;

    class Fruit{
        public $name;
        public $color;

        public function __construct($n, $c)
        {
            $this->name = $n;
            $this->color = $c;
        }
        public function message(){
            echo 'the fruit is {$this->name}, and the color is{$this->color}';
        }
    }

    class Strawberry extends Fruit{
        public function question(){
            echo "i'm a fruit or a berry??";
        }
    }

    $fruit = new Strawberry('Strawberry', 'red');
    $fruit->message();
    $fruit->question();
?>