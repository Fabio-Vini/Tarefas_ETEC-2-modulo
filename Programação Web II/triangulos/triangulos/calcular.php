<?php
$a = $_GET['11'];
$b = $_GET['12'];
$c = $_GET['13'];
$equilatero = 'equilatero.jpg';
$isoceles = 'isoceles.jpg';
$escaleno = 'escaleno.jpg';
$img = ' ';

if(($a == $b)  && ($b == $c)){
   $img = 'img/equilatero.jpg';
}
else if(($a != $b) && ($a != $c) && ($b != $c)){
    $img = 'img/escaleno.jpg';
}
else{
    $img = 'img/isosceles.jpg';
}

echo '<img src=" '.$img.' " width="100px">';