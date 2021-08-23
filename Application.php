<?php 
	//Define o local da pasta pela rede. exemplo:: http://localhost/pasta
	define('INCLUDE_PATH', 'http://localhost/MeusProjetos/PortifolioPessoal/');
	//Define o local da pasta pela rede com as paginas que serão renderizadas. exemplo:: http://localhost/pasta/Views/pages
	define('INCLUDE_PATH_FULL', 'http://localhost/MeusProjetos/PortifolioPessoal/Views/pages/');

	//Função executar que esta sendo chamada no arquivo index.php
	class Application
	{
		public function executar(){
			$url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'Home';
			$url = ucfirst($url);
			$url.='Controller';

			if (file_exists('Controller/'.$url.'.php')) {
				$className = 'Controller\\'.$url;
				$controller = new $className;
				$controller->executar();

			}else{
				die('Não existe este controlador');
			}
		}
	}
 ?>