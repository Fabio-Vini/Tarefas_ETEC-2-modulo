<?php
session_start() ;
if($_POST)
{
     $_SESSION['nome'] = $_POST['nome'];
    header('location: b.php');
}
?>

<form method="post">
    Digite seu nome:
    <input type="text" name="nome"><br>
    <button>Entrar</button>
</form>