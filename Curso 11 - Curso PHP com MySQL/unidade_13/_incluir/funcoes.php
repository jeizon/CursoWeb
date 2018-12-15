<?php
	function enviarMensagem($dados) {
		// Dados do formulario
		$nome_usuario		= $dados['nome'];
		$email_usuario		= $dados['email'];
		$mensagem_usuario	= $dados['mensagem'];
		
		// Criar variaveis de envio
		$destino			= "teste@localhost.com";
		$remetente			= "jeizon@jeydroids.desenv";
		$assunto			= "Mensagem do site";
		
		//Montar o corpo da mensagem
		$mensagem			= "O usuário " . $nome_usuario . "enviou uma mensagem " . "<br>";
		$mensagem			.= "email do usuário: " . $email_usuario . "<br>";
		$mensagem			.= "Mensagem:" . "<br>";
		$mensagem			.= $mensagem_usuario;
		
		return mail($destino, $assunto, $mensagem, $remetente);
	}
?>

