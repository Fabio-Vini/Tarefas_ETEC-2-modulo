<?php
if ($_POST) {
    // code...
    $dados = array(
        'firstName' => $_POST['firstName'],
        'lastName' => $_POST['lastName'],
        'escolaridade' => $_POST['escolaridade'],
        'data' => $_POST['data'],
        'email' => $_POST['email'],
        'endereco' => $_POST['endereco'],
        'endereco2' => $_POST['endereco2'],
        'telefone' => $_POST['telefone'],
        'estado' => $_POST['estado'],
        'experiencia' => $_POST['experiencia'],
    
);
}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Currículo</title>
    <link href="css/modelo2.css">
</head>
<body>
    <main>
        <section class="principal">
            <h2>Dados</h2>  
            <ul>
                <li>
                    <div>
                        <h4>Seu nome: </h4>
                        <p><?= $dados['firstName']; ?></p>
                    </div>
                </li>  
                <li>
                    <div>
                        <h4>Sobrenome: </h4>
                        <p><?= $dados['lastName']; ?></p>
                    </div>
                </li>  
                <li>
                    <div>
                        <h4>Escolaridade: </h4>
                        <p><?= $dados['escolaridade']; ?></p>
                    </div>
                </li>   
                
                <li>
                    <div>
                        <h4>Data de Nascimento: </h4>
                        <p><?= $dados['data']; ?></p>
                    </div>
                </li>   
                <li>
                    <div>
                        <div>
                            <h4>Email:</h4>
                            <p><?= $dados['email']; ?></p>
                        </div>
                    </div>
                </li>     
            
            <h2>Contato</h2>
            <ul class="lista-topicos">
                <li>
                    <div>
                        <h4>Endereço:</h4>
                        <p><?= $dados['endereco']; ?></p>
                    </div>
                </li>
                <li>
                    <div>
                        <h4>Endereço 2:</h4>
                        <p><?= $dados['endereco']; ?></p>
                    </div>
                </li>
                <ul>
                <li>
                    <div>
                        <h4>Telefone:</h4>
                        <p><?= $dados['telefone']; ?></p>
                    </div>
                </li>  
                <li>
                    <div>
                        <h4>Estado:</h4>
                        <p><?= $dados['estado']; ?></p>
                    </div>
                </li>  
                <li>
                    <div>
                        <h4>Experiencia:</h4>
                        <p><?= $dados['experiencia']; ?></p>
                    </div>
                </li>     
            </ul>
        </section>
    </main>
    <script>
        window.print();
    </script>

</html>