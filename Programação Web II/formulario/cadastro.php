<?php
if($_POST){
    echo"Nome: ".$_POST['nome'].'<br>';
    echo"Email: ".$_POST['email'].'<br>';
    echo"Assunto: ".$_POST['assunto'].'<br>';
    echo"Mensagem: <br>".$_POST['mensagem'].'<br>';
}