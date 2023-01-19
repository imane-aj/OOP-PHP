<?php 
    class Fruit{
        public $name;

        protected function set_name($n){
            $this->name = $n;
        }
        // public function get_name(){
        //     return $this->name;
        // }
    }

    $mango = new Fruit();
    $mango->set_name('mango');
    // echo $mango->get_name();
    echo $mango;
?>