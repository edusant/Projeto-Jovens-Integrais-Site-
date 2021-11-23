<?php
session_start(); 
include_once('conexao.php');
 if (!isset($_SESSION['id'])) {
    header('location: index.html');
} 
  $obj = new bd();
  $link = $obj->conecta_bd();
  $codigo = uniqid();

//session_start();
  if ($_POST['tipo'] == 2) {
if(!empty($_POST['tipo']) && !empty($_POST['produto']) && !empty($_POST['nomeproduto']) && !empty($_POST['preço']) &&
!empty($_POST['despro']) && !empty($_POST['ficha'])){
	//var_dump($_FILES);
	echo "Vem aqui";
	$tipo = trim(htmlspecialchars(mysqli_escape_string($link, $_POST['tipo'])));
	$produto = trim(htmlspecialchars(mysqli_escape_string($link, $_POST['produto'])));
	$nome = trim(htmlspecialchars(mysqli_escape_string($link, $_POST['nomeproduto'])));
	$preço = trim(htmlspecialchars(mysqli_escape_string($link, $_POST['preço'])));
	$despro = trim(htmlspecialchars(mysqli_escape_string($link, $_POST['despro'])));
	$ficha = trim(htmlspecialchars(mysqli_escape_string($link, $_POST['ficha'])));
	if (isset($_POST['promocao'])) {
		$promocao = true;
	}
	else{
		$promocao = false;
	}
	if (is_numeric($nome)) {
		$_SESSION['resposta'] = "<h2>O nome não pode ser apenas números</h2>";
		header('location: admsim.php');
		exit();
	}

	$sql = "INSERT INTO `produto` (`id`, `descricao`, `preco`, `Tipo`, `promoção`, `codigo`, `ficha`, `nome`) VALUES (NULL, '$despro', '$preço', '$tipo', '$promocao', '$codigo', '$ficha', '$nome');";
	if (mysqli_query($link, $sql)) {
		
		$sql = "SELECT * from produto where codigo = '$codigo'";
		$dados = mysqli_query($link, $sql);
		$info = mysqli_fetch_array($dados);
		//var_dump($info);
		$id = $info['id'];
		//echo "$id";
		////////////////////////////////////////////////////////////
		//Cadastrando as imagens!!
		//var_dump($_FILES);
		$quantidadeArquivos = count($_FILES['imgpro']['name']);
		echo $quantidadeArquivos;
		$contador = 0;
		while ($contador < $quantidadeArquivos) {
			$extensao = pathinfo($_FILES['imgpro']['name'][$contador], PATHINFO_EXTENSION);
			echo " $extensao";
			$pasta = "img/";
			$temporario = $_FILES['imgpro']['tmp_name'][$contador];
			$newname = uniqid().".$extensao";
			if (move_uploaded_file($temporario, $pasta.$newname)) {
				$novo = $pasta.$newname;
				$sql = "INSERT into img (idProduto, LOCAL) values($id, '$novo')";
				if(mysqli_query($link, $sql)){
					$_SESSION['resposta'] = "<h2>Produto cadastrado com sucesso!</h2>";
				}
			}
			else
			{
				echo "Erro seu idiota";
			}
			$contador = $contador + 1;
		}


		
		header('location: admsim.php');
	}

//echo $tipo;
} 
else{
	$_SESSION['resposta'] = "<h2>Erro no formulário!</h2>";
	header('location: admsim.php');
}
}

//echo $_POST['tipo'];
if ($_POST['tipo'] == 3) {

if(!empty($_POST['tra']) && !empty($_POST['des']))
{
	
	$nome = trim(htmlspecialchars(mysqli_escape_string($link, $_POST['tra'])));
	$descricao = trim(htmlspecialchars(mysqli_escape_string($link, $_POST['des'])));
	echo "$nome + $descricao";
	$sql = "INSERT INTO trabalho (id, nome, descricao, codigo) VALUES (NULL, '$nome', '$descricao', '$codigo');";
	if (mysqli_query($link, $sql)) {
		
		$sql = "SELECT * from trabalho where codigo = '$codigo'";
		$dados = mysqli_query($link, $sql);
		$info = mysqli_fetch_array($dados);
		//var_dump($info);
		$id = $info['id'];
		echo "$id";
		//die();
		////////////////////////////////////////////////////////////
		//Cadastrando as imagens!!
		//var_dump($_FILES);
		$quantidadeArquivos = count($_FILES['fotos']['name']);
		echo $quantidadeArquivos;
		$contador = 0;
		while ($contador < $quantidadeArquivos) {
			$extensao = pathinfo($_FILES['fotos']['name'][$contador], PATHINFO_EXTENSION);
			echo " $extensao";
			$pasta = "img/";
			$temporario = $_FILES['fotos']['tmp_name'][$contador];
			$newname = uniqid().".$extensao";
			if (move_uploaded_file($temporario, $pasta.$newname)) {
				$novo = $pasta.$newname;
				$sql = "INSERT into img (idTrabalho, LOCAL) values($id, '$novo')";
				if(mysqli_query($link, $sql)){
					//echo "Produto tudo certo";
					$_SESSION['resposta'] = "<h2>Trabalho cadastrado com sucesso!</h2>";
				}
			}
			else
			{
				echo "Erro seu idiota";
			}
			$contador = $contador + 1;
		}


		
		header('location: admsim.php');
	}
}else{
	$_SESSION['resposta'] = "<h2>Erro no formulário!</h2>";
	header('location: admsim.php');
}
}
