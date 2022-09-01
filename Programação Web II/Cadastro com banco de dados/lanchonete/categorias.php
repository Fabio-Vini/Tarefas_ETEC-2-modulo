<meta charset="utf-8">
<?php
include('conexao.php');
include('menu.php');
if($_POST){
	CriarCategoria($_POST['nome'],$_FILES['foto']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<style>
		body{
    margin: 0 auto;
}
.img{
    width: 70px;
    height:70px;
    border-radius: 25px 25px 25px 25px;
}

td{
    border:1px solid blue;
    border-collapse: collapse;
}

td{
    padding: 10px
}

*{
    font-family: Arial;
}

table tr:nth-child(even){
    background-color: white;
}

.form {
    margin-top: -80px;
}
h2 {
    padding: 0 0 20px 0;
    color: #f8663b;
    text-align: center;
}
/* ------------------------------------------- */


/* ESTILO DO CONTAINER DE CADASTRO */
.cadastro{
    width: 550px;
    background: #FF9509;
    box-shadow: 1px 2px 10px #000, 3px 6px 20px #000;
    padding: 50px 20px;
    margin-top: 30%;
}

.cadastro p {
    margin: 0;
    padding: 0;
    font-weight: bold;
    color: #fff;
}
.cadastro input {
    width: 100%;
    margin-bottom: 20px;
}
.cadastro input[type="text"],
.cadastro input[type="password"] {
    border: none;
    border-bottom: 1px solid #fff;
    background-color: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px
}
::placeholder {
    color: rgba(255,255,255,.5);
}
.cadastro input[type="submit"] {
    border: none;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
    background-color: #f8663b;
    cursor: pointer;
    border-radius: 20px;
}
.cadastro input[type="submit"]:hover {
    background-color: #efed40;
    color: #262626; 
}
.cadastro a  {
    color: #fff;
    font-size: 14px;
    font-weight: bold;
    text-decoration: none;
}
.cadastro a:hover {
    color: rgba(255,255,255,.8);
}
/* --------------------------------------------- */


/* ESTILO DA CAIXA DE PESQUISA DO CABECALHO */
.busca{
    text-align: center;
    width: 30%;
    float: left;
    padding-top: 1.5%;
  }
  
  .busca input{
    background-image: url(imgs/icone-pesquisa.png);
    background-repeat: no-repeat;
    height: 6px;
    padding: 12px;
    width: 170px;
    margin-top: -7px;
    background-position: 96%;
    border: 1px solid transparent;
  }
  
  .busca input::placeholder{
      color: gray;
  }
/* ----------------------------------------------------- */
	</style>

</head>
<body>
<div class="busca">
    	<input placeholder="Pesquise aqui" type="text" />
	</div>
	</header>

<form class="cadastro" method="post" enctype="multipart/form-data">
	Nome: <input type="text" name="nome">
	<br>
	Foto: <input type="file" name="foto">
	<br>
	<button>Cadastrar</button>
</form>
<hr>
<table>
	<thead>
		<tr><td>#cód</td>
			<td>#Nome</td>
			<td>#Foto</td>
			<td>#</td>
		</tr>
	</thead>
	<tbody>
		<?php 
			$todas = ListarCategorias();
			while($cat = $todas->fetch_object())
			{
				echo '<tr>
						<td>'.$cat->cd.'</td>
						<td>'.$cat->nome.'</td>
						<td> <img src="'.$cat->foto.'"style="height:5vh;"></td>
						<td>#</td>
					</tr>';
			
			}
		?>
	</tbody>
</table>
</body>
</html>

		<?php 
			$todas = ListarCategorias();
			while($cat = $todas->fetch_object())
			{
				echo '<tr>
						<td>'.$cat->cd.'</td>
						<td>'.$cat->nome.'</td>
						<td> <img src="'.$cat->foto.'"style="height:5vh;"></td>
						<td>#</td>
					</tr>';
			
			}
		?>
