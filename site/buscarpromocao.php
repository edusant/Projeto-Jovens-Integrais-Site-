<?php
	session_start();
    

	include_once('conexao.php');
	$obj = new bd();
	$link = $obj->conecta_bd();
  
	



		$sql = "SELECT * from produto where promoção = 1";
	if($resultado = mysqli_query($link, $sql)){
		
 		while ($registro = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
 			# code...
 			if($registro['status'] == 1){
 			echo "<h3>".$registro['nome']."</h3>";
 			$idil = $registro['id'];
 			$sql =  "SELECT * FROM img where idProduto = $idil";
 			if($re = mysqli_query($link, $sql))
 			{
 				$comeco = 0;
 				$nomid = $registro['nome'];

 				$contador = 0;
 				while ($r = mysqli_fetch_array($re, MYSQLI_ASSOC))
 				{
 					if ($comeco == 0) {
 						echo '<div id="a'.$nomid.$idil.'" class="carousel slide" data-ride="carousel">
 						<ul class="carousel-indicators">
    <li data-target="#a'.$nomid.$idil.'" data-slide-to="'.$contador.'" class="active"></li>';
     $contador = $contador + 1;
     $comeco = 1;
 					}
 					else
 					{
 						echo'<li data-target="#a'.$nomid.$idil.'" data-slide-to="'.$contador.'"></li>';
     $contador = $contador + 1;
 					}
 					

  


  
 				}
 				if ($comeco == 1) {
 					echo "</ul>";
 				}


 				 				
 		}

 		if($ra = mysqli_query($link, $sql)){
 			$c = 0;
 				$nomid = $registro['nome'];
 				$contador = 0;

 					while ($r = mysqli_fetch_array($ra, MYSQLI_ASSOC))
 				{
 					if ($c == 0) {
 						echo '<div class="carousel-inner">
    <div class="carousel-item active">
      <img class="img-fluid" src="'.$r['LOCAL'].'" alt="-" width="460" height="345">
    </div>';

     
     $c = 1;
 					}
 					else
 					{
 						echo'<div class="carousel-item">
      <img class="img-fluid" src="'.$r['LOCAL'].'" alt="-" width="460" height="345">
    </div>';
     
 					}
 					

  


  
 				}
 				if ($c == 1) {
 					echo '</div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" style="color: black" href="#a'.$nomid.$idil.'" data-slide="prev">
    <span class="carousel-control-prev-icon "></span>
  </a>
  <a class="carousel-control-next" href="#a'.$nomid.$idil.'" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>';
 				}
 			}//fim se
 			$descricao = $registro['descricao'];
      echo "<b class='text-info'>Preço: </b><br>".$registro['preco']."<br><br>";
 			echo "<b class='text-info'>Descrição</b><p>$descricao</p>";

 			echo '<br>
 			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#a'.$registro['nome'].'">
    Saiba mais
  </button>

  <!-- The Modal -->
  <div class="modal" id="a'.$registro['nome'].'">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title text-info text-center">'.$registro['nome'].'</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        
        <p ><br><b class="text-info">Preço:</b><br> '.$registro['preco'].'</p>
        <br>
        <p><b class="text-info">descrição</b></p>
          '.$registro['descricao'].'
        </div>
        <!-- Modal body -->
        <div class="modal-body">
        <p><b class="text-info">ficha tecnica</b></p>
          '.$registro['ficha'].'
          
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

 			<br>
------------------------------------------------------------------------------------------------
 			<br><br>';
}
}

}
?>