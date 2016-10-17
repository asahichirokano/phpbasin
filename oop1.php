<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class car{
    public $color; //prorerty
    
    public function setColor($c){
        return 'car is : '. $this->color=$c;
    }
    public function sayHello(){ 
        return 'Say Hallo';
    
}
}
$newcar = new car;
$test =$newcar->setColor('red');
echo $test;
echo '<br>';
echo $newcar -> sayHello();
echo '<br>';
echo $newcar->color='ornage';