<?php
	class validacao
	{
	public function validaremail($email){
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			return true;
		}
		else
		{
			return false;
		}
	}

	public function tratar_nome ($nome) {
    $nome = strtolower($nome); // Converter o nome todo para minúsculo
    $saida;
    $nome = explode(" ", $nome); // Separa o nome por espaços
    for ($i=0; $i < count($nome); $i++) {

        // Tratar cada palavra do nome
        if ($nome[$i] == "de" or $nome[$i] == "da" or $nome[$i] == "e" or $nome[$i] == "dos" or $nome[$i] == "do") {
            $saida .= $nome[$i].' '; // Se a palavra estiver dentro das complementares mostrar toda em minúsculo
        }else {
            $saida .= ucfirst($nome[$i]).' '; // Se for um nome, mostrar a primeira letra maiúscula
        }

    }
    return $saida;
}

	}		


?>