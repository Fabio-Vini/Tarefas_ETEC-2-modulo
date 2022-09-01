<?php
include('conexao.php');
if($_POST){
	CriarConta($_POST['nome'],$_POST['email'],$_POST['senha']);
}
?>

<style>
	*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background: url(imgs/steve.gif);
    background-repeat: no-repeat;
    background-size: 100% 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

h2{
    font-size: 30px;
    color: rgb(255, 145, 0);
    text-align: center;
    margin: 20px;
}

h4{
    color: orange;
}

a{
    text-decoration: none;
    color: white;
    transition: .25s ease-in-out;
}

a:hover{
    color: white;
}

.container{
    width: 550px;
    background: rgba(0, 0, 0, 0.377);
    border-radius: 20% 0;
    box-shadow: 1px 2px 10px #000, 3px 6px 20px #000;
    padding: 50px 20px;
}

input{
    width: 100%;
    height: 46px;
    background: transparent;
    border: none;
    outline: none;
    border-bottom: 1px solid rgb(255, 145, 0);
    color: white;
    transition: 25s ease-in-out;
}

.input-field{
    position: relative;
    margin-bottom: 20px;
}

.input:focus {
    border-bottom: 2px solid #26a96a;
    box-shadow: 0 1px 0 0 #26a96a;
}

input:focus + label {
    transform: translateY(-14px) scale(.8);
    color: #26a96a;
    font-weight: bold;
}

input::not(:placeholder-shown) + label {
    transform: translateY(-14px) scale(.8);
    color: #26a96a;
    font-weight: bold;
}

input::not(:placeholder-shown){
    border-bottom: 2px solid #26a96a;
    box-shadow: 0 1px 0 0 #26a96a;
}

label{
    position: absolute;
    top: 0;
    left: 0;
    color: white;
    transform: translateY(18px);
    transition: 25s ease-in-out;
}

::placeholder {
    color: rgba(128, 128, 128, 0.863);
}

button {
    padding: 15px 50px;
    margin: 20px;
    background: transparent;
    border: 2px solid white;
    color: white;
    text-transform: uppercase;
    border-radius: 20px;
    cursor: pointer;
}

button:hover{
    background-color: rgb(255, 145, 0);
}
.center{
    text-align: center;
}

 p:hover{
    color: rgb(255, 145, 0);
}
</style>


<div class="container">
        <h2>Crie sua conta:</h2>

        <form action="" method="post">

            <div class="input-field">
                <h4>Nome:</h4>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome: ">
                <label for="nome"> </label>
            </div>

			<div class="input-field">
                <h4>Email:</h4>
                <input type="text" id="email" name="email" placeholder="Digite seu email: ">
                <label for="email"> </label>
            </div>

            <div class="input-field">
                <h4>Senha:</h4>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha:">
                   <label for="senha"></label>
            </div>

            <div class="center">
                <button>Cadastrar</button>
            </div>

        </form>
		<div class="links">
                 <a href="index.php"><p>Já tem login? Entre</p></a>
             </div>
</div>