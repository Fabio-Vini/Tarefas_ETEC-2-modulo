<?php
setcookie('nome', 'Fabio', time()+300);
setcookie('numero', 0, time()+300);

if($_GET){
    $a = $_COOKIE['numero'];
    $a++;
    setcookie('numero', $a);
}