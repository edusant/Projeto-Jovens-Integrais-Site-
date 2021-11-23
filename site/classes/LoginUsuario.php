<?php
namespace classes;
use classes\validarEntrada;

class LoginUsuario
{

    function Login($email, $senha){
        // session_start();
        include_once('conexao.php'); 
        include_once('classes/ValidarDados.php');
        $validarDados = new validarEntrada();
        $obj = new bd();
        $link = $obj->conecta_bd();
        $validarDados->valida($email, $senha);

    }
}

    