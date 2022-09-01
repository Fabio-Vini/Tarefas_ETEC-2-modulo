<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>

	/*header>
    
    <img class="cabecalho" src="imgs/img-cabecalho.jpg">*/

/*<div class="busca">
    	<input placeholder="Pesquise aqui" type="text" />
	</div>*/

	body{
  margin: 0 auto;
  background-color: #ecbdb5;
}
  
header{
  width: 100%;
  background-color: #aa0806;
  height: 60px;
}

.menu-urls{
  height: 80px;
  border-bottom: 1px solid #efefef;/*colocar uma borda onde voce quiser que esteja*/
}

.menu ul li{
  display: inline-block;
  color: #FFFE0E;
  margin-left: 15px;
  height: 48px;
}

.menu ul li a:hover{
  color: #FF0328;
}

.menu ul li a{
  color: #8b8b8b;
  text-decoration: none;
  font-size: 18px;
  text-transform: uppercase;/*para definir os jeitos da letra(maiusculo, minusculo*/
}

.menu{
  width: 70%;
  float: left;
}

.busca{
  text-align: center;
  width: 30%;
  float: left;
  padding-top: 1.5%;
}

.busca input{
  background-image: url(imgs/icone-busc.busca.png);
  background-repeat: no-repeat;
  height: 6px;
  padding: 12px;
  width: 170px;
  margin-top: -7px;
  background-position: 96%;
  border: 1px solid red;
}

.busca ::placeholder{
    color: gray;
}

.cabecalho{
   position: relative;
   margin-top: -1.1%;
   width: 100%;
   height: 400px;
   border-radius: 0px 0px 0px 0px;
} 

</style>

<header>
		<div class="menu">
			<ul>
				<a href="home.php"><li>Home</li></a>
				<a href="listar.php"><li>Usuários</li></a>
				<a href="categorias.php"><li>Categorias</li></a>
				<a href="produtos.php"><li>Produtos</li></a>
				<a href="perfil.php"><li>Perfil</li></a>
				<a href="sair.php"><li>Sair</li></a>
			</ul>	
		</div>

  <!--  
		<div class="busca">
    	<input placeholder="Pesquise aqui" type="text" />
	</div>
			<img class="cabecalho" src="imgs/img-cabecalho.jpg">
	</header>
-->
</body>
</html>