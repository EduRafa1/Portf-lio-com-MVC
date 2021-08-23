<?php 
/* Sistema feito em HTML - PHP - CSS com o compilador SASS e metodologia MVC*/

//Autoload de classes
	$autoload = function($class){
		if ($class == 'Email') {
			include('phpmailer/PHPMailerAutoload.php');
		}
		include($class.'.php');
	};
	spl_autoload_register($autoload);

	//Inicio da aplicação 
	$app = new Application();
	$app->executar();

 ?>