<?php
namespace classes;

class validarEntrada
{

    function valida($email, $senha){
        if(!isset($email) || !isset($senha)){
            echo'Email ou senha invalidos';
            die();
        }

        if(strlen($email) == 0 || strlen($senha) == 0){
            echo'Email ou senha invalidos';
            die();

            // if(is_va)
        }
        // if(isset)

    }
}

    