<?php
namespace classes;

class VerfificarSenha
{

    function VerfificarSenhaFun($email, $senha){
        include_once('conexao.php'); 
        include_once('classes/ValidarDados.php');
        $obj = new bd();
        $link = $obj->conecta_bd();
        $sql = "SELECT * from usuarios where email = '$email'";
        $resulto = mysqli_query($link, $sql);
        if($resulto){
            //echo "<h1>Cometários</h1>";
            $dados = mysqli_fetch_array($resulto);
            if(isset($dados['nome'])){

            echo $senha;
            //die(); 
            //echo $dados['senha'];
            if (password_verify($senha, $dados['senha'])) {
                //echo $email;
                //die();
                $_SESSION['id'] = $dados['id'];
                $sql = "UPDATE controlelogin set cont = 0 where email = '$email'";
                mysqli_query($link, $sql);
                header('location: admsim.php');
                die();
            }
            else{
                echo'Chamar a função controle';
            }
    }
}
    }
}