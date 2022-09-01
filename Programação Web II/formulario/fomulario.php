<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INTEGRAÇÃO COM FORMULÁRIOS</title>
</head>
<body>
    <form method="POST" action=" ">

        <label for="nome">Nome:</label>
        <input type="text" name="nome"
        placeholder="Digite seu nomezinho!">
        <br>
        
        <label for="idade">Idade:</label>
        <input type="text" name="idade"
        placeholder="Digite sua idade!">
        
        <br>

        <label for="email">Email:</label>
        <input type="text" name="email"
        placeholder="Digite seu email!">

        <br>

        <button>Enviar</button>
    </form>
    <br>
     <?php
     if($_POST){
     echo $_POST['nome']. " voce tem " .$_POST['idade']. " anos " ." seu email é: " 
     .$_POST['email'];

     //http://localhost:8085/fomulario.php?nome=Fabin&idade=17
     }
    ?>


    
</body>
</html>