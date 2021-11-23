<?php
	include_once('conexao.php');
	$obj = new bd();
	$link = $obj->conecta_bd();
	session_start();
  $id = mysqli_escape_string($link, $_SESSION['id']);
  if(!isset($_SESSION['id'])){
  	header('Location: index.php');
  }
	
	
	$cont = 0;
	$logico = 0;
	$sql = "SELECT * FROM produto where status = 1";
	$registro = mysqli_query($link, $sql);
	if($registro){
		
		while($dados = mysqli_fetch_array($registro, MYSQLI_ASSOC)){
			if($logico == 0){
				echo "<table class='table'>";
				echo"<thead style='color: red;'>
      					<tr>
        				<th>Nomes</th>
        				<th>Preco</th>
        				<th>Opção</th>
      					</tr>
    				</thead>
    				<tbody>";
				$logico += 1; 
			}
			echo "<tr>";
			echo "<th>".$dados['nome']."</th>";
			echo "<th>".$dados['preco']."</th>";
			echo "<th><button class='btn btn-primary' onclick='apagar(".$dados['id'].")'>Desativar</button></th>";
			
			//echo "<th>".$dados['datahis']."</th>";

			echo "</tr>";
			$cont += 1;
		}
		if ($logico == 1) {
			echo "</tbody>
			</table>";
			
		}

	}
	if($cont == 0){
		echo "<p>Você não possui histórico</p>";
	}
	


