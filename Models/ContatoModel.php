<?php 
	namespace Models;
	/**
	Envio de E-mail, configurar o $mail com as informações citadas
	 */ 
	class ContatoModel
	{
		
		public static function enviarFormulario(){
			
			$assunto = $_POST['assunto'];
			$email = $_POST['email'];
			$tipo_projeto = $_POST['tipo_projeto'];
			$resumo = $_POST['resumo'];
			$telefone = $_POST['tel'];
		
			$mail = new \Email('Coloque o Host','Usuario do email do C-panel','Password --','Nome');
			$mail->addAdress('teste@youcodelove.com','Eduardo');
			$mail->formatarEmail(array('assunto'=>$assunto,'corpo'=>'Email: '.$email.'<br> Telefone: '.$telefone.'<br> Tipo do projeto: '.$tipo_projeto.'<br> Resumo: '.$resumo));
			$mail->enviarEmail();

		}
	}


 ?>