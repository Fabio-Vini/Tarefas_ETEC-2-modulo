<?php
include("conexao.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Projeto</title>
	<meta charset="utf-8">
	  <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="css/style_carrinho.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script src="js/carrinho.js"></script>
            
</head>
<body>

	<div class="container-fluid">
		<?php
		$todas = ListarProdutos();
		$i = 1;
		echo '<div class="row">';
		while($p = $todas->fetch_object()){
		if ($i > 4) {
			$i=1;
             echo '</div><div class="row">' ;
		}
		$i++;
		echo '
		    <div class="col s3 m3">
		      <div class="card">
		        <div class="card-image">
		          <img src="'.$p->foto.'">
		          <span class="card-title">'.$p->nome.'</span>
		        </div>
		        <div class="card-content">
		          <p>'.$p->valor.'</p>
		        </div>
		        <div class="card-action">
		          <input type="number" value="0" class="produto" id="'.$p->cd.'">
		        </div>
		      </div>
		    </div>
	  
	  	';
	}
	echo '</div>';	
	?>

	<div class="carrinho">
		<span>Itens no carrinho</span>
		<table class="hightlight" id="carrinho">
			<tr>
				<td>Produto</td>
				<td>Qtd</td>
				<td>Valor</td>
				<td>Total</td>
			</tr>
			<tr>
				<td><img src="imgs/download.jpg" style="height: 50px;"></td>
				<td>3</td>
				<td>R$3,98</td>
				<td>R$11,94</td>
			</tr>		
		</table>
	</div>
</body>
</html>