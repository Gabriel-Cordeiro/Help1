<?php

class UsuarioModel extends CI_Model {

	public $id_usuario;
	public $login;
	public $senha;
	public $nome;


	function VerificarUsuarioPorLoginESenha($login, $senha){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "localhost:50871/api/usuarios?login=$login&password=$senha");
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $token));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 0);
		
        
        $curl_response = curl_exec($ch);
                
        curl_close($ch);
	}

}
?>
