<?php
session_start();
$user = 'root';
$senha = 'usbw';
$banco = 'projeto';
$server = 'localhost';
$con = new mysqli ($server,$user,$senha,$banco);
if (!$con){
	echo 'Erro ao conectar!' ;
}

function CriarProduto($nome,$desc,$valor,$cat,$foto){
	$destino = 'imgs/'.$foto['name'];
	$sql = 'INSERT INTO produto VALUES';
	$sql .= '(null,"'.$nome.'","'.$desc.'","'.$valor.'","'.$destino.'",'.$cat.')';
	echo $sql;
	if(move_uploaded_file($foto['tmp_name'], $destino)){
		$res= $GLOBALS['con']->query($sql);
		if($res){
			alert("Produto cadastrado!");
		}else{
			alert("Erro:".$GLOBALS['con']->error);
		}
	}
}

function ListarProdutos()
{
	$sql = 'SELECT p.*, c.nome cat
	FROM produto p, categoria c
	WHERE p.id_categoria = c.cd';
	$res = $GLOBALS['con']->query($sql);
	return $res;
}

function ListarCategorias()
{
	$sql = 'SELECT * FROM categoria';
	$res = $GLOBALS['con']->query($sql);
	return $res;
}

function CriarCategoria($nome,$foto){
	$destino = 'imgs/'.$foto['name'];
	$sql = 'INSERT INTO categoria VALUES';
	$sql .= '(null,"'.$nome.'","'.$destino.'")';
	if(move_uploaded_file($foto['tmp_name'], $destino)){
		$res= $GLOBALS['con']->query($sql);
		if($res){
			alert("Categoria cadastrada!");
		}else{
			alert("Erro:".$GLOBALS['con']->error);
		}
	}
}

function Proteger(){
	if(!$_SESSION['logado']){
		vai('index.php');
	}
}

function ListarContas(){
	$sql = 'SELECT * FROM user';
	$res = $GLOBALS['con']->query($sql);
	return $res;
}
function CriarConta ($nome, $email, $senha){
	$sql = 'INSERT INTO user (nome, email, senha) VALUES ("'.$nome.'","'.$email.'","'.$senha.'")';
		$resultado = $GLOBALS['con'] ->query($sql);
		if ($resultado){
			echo 'Cadastrado com sucesso!';
		}
		else{
			echo 'Erro ao cadastrar.';
		}
	}
function ExcluirConta($cd){
	$sql = 'DELETE FROM user  WHERE cd ='.$cd;
	$res = $GLOBALS ['con']->query($sql);
		if($res){
			alert ("Excluido com sucesso!");
			vai('listar.php');
		}
		else{
			echo "Erro ao excluir.";
		}
	}
function alert ($msg){
	echo '<script>
		alert("'.$msg.'");
		</script>';
}
function vai($url){
	echo '<script>
		window.location = "'.$url.'";
		</script>';
}


function Login($user,$pass){
	$sql = 'SELECT * FROM user WHERE';
	$sql .=' email = "' .$user.'"';
	$sql .= 'AND senha="'.$pass. '"';
	$res = $GLOBALS['con']->query($sql);
	if($res->num_rows > 0){
		//encontrou o usuario, guardamos os dados dele na sessão
		$user = $res->fetch_array();
		$_SESSION['cd'] = $user['cd'];
		$_SESSION['nome'] = $user['nome'];
		$_SESSION['email'] = $user['email'];
		$_SESSION['foto'] = $user['foto'];
		$_SESSION['logado'] = true;
		//direcionamos ele para a pagina
		vai('home.php');

	}else{
		//não foi encontrado usuario com essa senha
		alert("Dados inválidos!");
		vai('index.php');
	}
}
