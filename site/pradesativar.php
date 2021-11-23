<?php
	session_start();
    $id = $_SESSION['id'];
    if(!isset($id)){
  		header('Location: index.php');
    }

	include_once('conexao.php');
	$obj = new bd();
	$link = $obj->conecta_bd();
	
 		$idpro = mysqli_escape_string($link, $_POST['nume']);



		$sql = "UPDATE produto SET status = 0 WHERE produto.id = $idpro;";
	if(mysqli_query($link, $sql)){
		echo "Desativado com sucesso";
	
}


 
