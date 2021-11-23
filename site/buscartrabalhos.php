<?php


	include_once('conexao.php');
	$obj = new bd();
	$link = $obj->conecta_bd();
	



		$sql = "SELECT * from trabalho";
	if($resultado = mysqli_query($link, $sql)){
		
 		while ($registro = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
 			# code...
 			if (isset($registro['id'])) {
 				# code...
 			if ($registro['status'] == 1) {
        # code...
      
 			echo "<h3 class='text-info'>".$registro['nome']."</h3>";
 			$idil = $registro['id'];
 			$sql =  "SELECT * FROM img where idTrabalho = $idil";
 			if($re = mysqli_query($link, $sql))
 			{
 				$comeco = 0;
 				$nomid = $registro['nome'];

 				$contador = 0;
 				while ($r = mysqli_fetch_array($re, MYSQLI_ASSOC))
 				{
 					if ($comeco == 0) {
 						echo '<div id="'.$nomid.$idil.'" class="carousel slide" data-ride="carousel">
 						<ul class="carousel-indicators">
    <li data-target="#'.$nomid.$idil.'" data-slide-to="'.$contador.'" class="active"></li>';
     $contador = $contador + 1;
     $comeco = 1;
 					}
 					else
 					{
 						echo'<li data-target="#'.$nomid.$idil.'" data-slide-to="'.$contador.'"></li>';
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
      <img src="'.$r['LOCAL'].'" alt="-" width="460" height="345">
    </div>';

     
     $c = 1;
 					}
 					else
 					{
 						echo'<div class="carousel-item">
      <img src="'.$r['LOCAL'].'" alt="-" width="460" height="345">
    </div>';
     
 					}
 					

  


  
 				}
 				if ($c == 1) {
 					echo '</div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#'.$nomid.$idil.'" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#'.$nomid.$idil.'" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>';
 				}
 			}
 			//fim se
 			echo "<br><br><h5 class='text-info'>descrição</h5>";
 			echo "<p>".$registro['descricao']."<p>";

 			echo "<br><br>------------------------------------------------------------------<br><br>";
}
}
}
}
?>