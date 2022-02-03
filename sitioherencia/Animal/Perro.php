<?php
 require_once('Animal.php');
class Perro extends Animal
{
    public function comer(){
        echo"<p>El perro, come huesos<p>";
    }

    public function dormir1(){
        echo"<p>Perro duerme<p>";
        $this->dormir();
    }
}