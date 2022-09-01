<?php
session_start();
    echo "<h1>Bem Vindo(a) ".$_SESSION['nome']. '</h1>';
        $img = ' ';
if($_SESSION['p1'] == '0')
{
    $img = 'certo.jpg';
}

else
{
    $img = 'errado.png';
}
echo "<img src= ' " .$img. "' style='height:100px;'>";
?>