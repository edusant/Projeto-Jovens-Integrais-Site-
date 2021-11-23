<?php 
  session_start();
  include_once('conexao.php');
if (!isset($_SESSION['id'])) {
    header('location: index.html');
}

  
  $obj = new bd();
  $link = $obj->conecta_bd();

  if (isset($_POST['senha']) && isset($_POST['email'])) { 
  $senha = mysqli_escape_string($link, ($_POST['senha']));
  $email = mysqli_escape_string($link, $_POST['email']);
  include_once('cAula.php');
  $ob = new validacao();
  $verEmail = $ob->validaremail($email);

  if ($verEmail == false) {
    $_SESSION['mensagemLogin'] = "Email inválido";
    header('location: mudarsenha.php');
    //echo"Tá morrendo aqui!";
    die();
  }

 
  $sql = "SELECT * from usuarios where email = '$email'";
      $resulto = mysqli_query($link, $sql);
      if($resulto)
      {
        $d = mysqli_fetch_array($resulto);
        if (!isset($d['nome'])) {
          echo $email;
          die();
            $_SESSION['mensagemLogin'] = "Usuário não cadastrado";
            header('location: mudarsenha.php');
          die();
        }
      }
  if (strlen($email) < 2) {
    header('location: mudarsenha.php?erro=2');
  }

    $sql = "SELECT * from controlelogin where email = '$email'";

      $resu = mysqli_query($link, $sql);
      if($resu)
      {
        $di = mysqli_fetch_array($resu);
        if (isset($di['email'])) 
        {
          if($di['cont'] == 5)
          {
            $dat = date('Y-m-d H:i:s');
            $datespi = $di['dataexpiracao'];
            if($dat < $datespi)
            {
              $_SESSION['mensagemLogin'] = "Bloqueio temporario por senha inválida";
              header('location: mudarsenha.php');
              die();
            } 
          }     
        }
      }
      

  $sql = "SELECT * from usuarios where email = '$email'";

  
  $resulto = mysqli_query($link, $sql);
  if($resulto){
    //echo "<h1>Cometários</h1>";
    $dados = mysqli_fetch_array($resulto);
    if(isset($dados['nome'])){
      $novasenha = '1';
      //echo $senha;
      //die(); 
      //echo $dados['senha'];
      if (password_verify($senha, $dados['senha'])) {
        //echo $email;
        if ($_POST['senhanova'] == $_POST['senhaconfirmada']) {
          $novasenha = mysqli_escape_string($link, password_hash($_POST['senhanova'], PASSWORD_DEFAULT));
        }
        else{
            $_SESSION['mensagemLogin'] = "Senhas novas são diferentes";
            header('location: mudarsenha.php');
            exit();
        }

        if (strlen($_POST['senhanova']) < 2){
         $_SESSION['mensagemLogin'] = "A senha possui poucos caracteteres";
              header('location: mudarsenha.php'); 
          exit();
        }
        $id = $_SESSION['id'];

        $sql = "UPDATE usuarios set senha = '$novasenha' WHERE id = $id";
        if (mysqli_query($link, $sql)) {
          echo "A senha foi trocada faça o teste";
        }
      
        die();
      }
      else
    {
      //echo"Vem aqui ";
      //die();
      $sql = "SELECT * from controlelogin where email = '$email'";

      $resul = mysqli_query($link, $sql);
      if($resul)
      {
        $da = mysqli_fetch_array($resul);
        if (isset($da['email'])) 
        {
          if ($da['cont'] == 5) {
            $sql = "UPDATE controlelogin set cont = 0 where email = '$email'";
            if(mysqli_query($link, $sql)){
              //echo "Agora vamos cer Aqui";
            }
            else
            {
              //echo "Deu pau";
            }
          }
            $sql = "SELECT cont from controlelogin where email = '$email'";

            $dadao = mysqli_query($link, $sql);

            $dada = mysqli_fetch_array($dadao);
              //echo $dada['cont'];
            $con = $dada['cont'] + 1;
            $sql = "UPDATE controlelogin set cont = $con where email = '$email'";
            mysqli_query($link, $sql);
            if ($con == 5) {
              # code...
            
            
              $data = date('Y-m-d H:i:s');
              $espi = strtotime($data);
              $espira = strtotime(' +5 minutes', $espi);
              //echo $data;
              //echo "<br>";
              //echo $espira;
              $ver = date('Y-m-d H:i', $espira);
              echo $ver;
              $sql = "UPDATE controlelogin set datablo = '$data', dataexpiracao = '$ver' where email = '$email'";

              //"INSERT into controlelogin(datablo, dataexpiracao ) values('$data', '$ver') where email = $email";
              if (mysqli_query($link, $sql)) {
                //echo "Ai sim";
              }
              
            }
            //die();
          
          }
        else
        {
          //echo "Aqui vai";
          $sql = "INSERT into controlelogin(email, cont) values('$email', 0)";
          if(mysqli_query($link, $sql))
          {
            //echo "Aqui tambe´m";
          }
          else
          {
            //echo "Deu pau";
          }
          //die();
        }
      }
      
    }
      $_SESSION['mensagemLogin'] = "Senha errada";
    header('location: mudarsenha.php');
    }
    $_SESSION['mensagemLogin'] = "Senha errada";
    header('location: mudarsenha.php');
  }
}