<?php
if(!isset($_COOKIE['nome'])){
    echo"tempo expirou, vaza!";
}

echo "vale:".$_COOKIE['numero']++;