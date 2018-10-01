<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Usuario extends CI_Controller {

	function cadastrar(){
		$this->load->view('usuario/cadastro');

	}

	function login(){	
		$login = $_POST['login'];
		$senha = $_POST['password'];

		$this->load->model('UsuarioModel');
		$result = $this->UsuarioModel->VerificarUsuarioPorLoginESenha($login,$senha); 

		if($result != null){

		}
		//$this->load->view('usuario/cadastro');
	}

}
