<?php

class Usuario{

	var $id;
	var $nome;
	var $email;
	var $login;
	var $senha;
	
	//Id
	function getId(){
		return $this -> id;
	}
	function setId($valor){
		$this -> id = $valor;	
	}
	
	//Nome
	function getNome(){
		return $this -> nome;
	}
	function setNome($valor){
		$this -> nome = $valor;	
	}
	
	//Email
	function getEmail(){
		return $this -> email;
	}
	function setEmail($valor){
		$this -> email = $valor;	
	}
	
	//Login
	function getLogin(){
		return $this -> login;
	}
	function setLogin($valor){
		$this -> login = $valor;	
	}
		
	//Senha
	function getSenha(){
		return $this -> senha;
	}
	function setSenha($valor){
		$this -> senha = $valor;	
	}

}

?>