<?php

//Como iremos usar nesta classe o que foi setado para a classe Bean, й necessбrio importar a classe Bean aqui.
require_once("../model/bean/Usuario.class.php");

class UsuarioDAO{

	function autenticaUsuario($usuario){
	
		/*
			Aqui й o local onde deverб ser feita a validaзгo dos dados em algum banco de dados.
			Seja ele um arquivo XML, um SGBD como o MySQL, SQLServer, Oracle, etc...
			
			Apуs feita a verificaзгo, este mйtodo deverб retornar uma resposta baseada no resultado da consulta feita.
			
			Vamos fazer apenas um teste com dados estбticos, mas vale lembrar que em um sistema comum, o correto й ter um banco de dados, 
			e a verificaзгo ser feita dinamicamente no mesmo.
			
			Nгo abordaremos aqui como faz pra consultar um banco de dados ou algo do tipo, pois material sobre isso hб de sobra na web.
			
			Vamos entгo apenas testar os dados e retornar uma resposta а controller, que requisitarб a View para exibн-la em tela ao usuбrio.			
		
		*/
		
		/* 
			Se os dados estiverem corretos, retornarб TRUE... Pois com isso, na classe View poderemos exibir a mensagem que quisermos, no formato que for melhor.
			Estб aqui a grande sacada de usar o Padrгo MVC... 
			Se quisйssemos que a view gerasse o cуdigo para um celular, ou um sistema desktop, simplesmente trocarнamos na Controller a view que ela estaria chamando.		
		*/
		if($usuario->getLogin() == 'admin' && $usuario->getSenha() == '123'){
			return true;
		}
		else{
			return false;
		}
		
	}

}

?>