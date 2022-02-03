<?php
 require_once('Animal.php');
class Gato extends Animal
{
    public function comer(){
        echo"<p>Gato Come<p>";
    }

    public function dormir1(){
        echo"<p>Gato duerme<p>";
        $this->dormir();
    }
}