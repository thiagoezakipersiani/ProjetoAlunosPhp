<?php 
function validarNome(string $nome) : bool
{
if (empty($nome)){
	setarMensagemErro('O nome não pode ser vazio') ;
	return false;
}

else if (strlen($nome) < 3 or strlen($nome) > 40 ) {
	setarMensagemErro('Nome deve conter pelo menos 3 caracteres e no maximo 40 caracteres');
	return false;
}
    return true;
}

 ?>