<?php
session_start() ;
if(!empty($_SESSION['nome']))
{
    header('location: a.php');
}

echo "<h1>Bem Vindo(a) ".$_SESSION['nome']. '</h1>';
?>

<form method="post">
    <fieldset>
        <legend>Pergunta 1:</legend>
        Quanto é ((3²+14) / 2) * 0) ?
        <input type="text" name="p1">
    </fieldset>
    <button>Responder</button>
</form>
<?php
if($_POST)
{
    $_SESSION['p1'] = $_POST['p1'];
    header('location: c.php');
}























// if(isset($_SESSION['nome']))
// {
//     echo "Bem vindo" .$_SESSION ['nome']
// }

// else
// {
//     header('location: a.php')
// }

// echo $_SESSION ['nome'];

