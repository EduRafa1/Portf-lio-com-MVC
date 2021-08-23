<?php 
	//Página home
	namespace Controller;
	class HomeController
	{
		public function __construct(){
			$this->view = new \Views\MainView('home');
		}
		public function executar(){
			if (isset($_POST['acao'])) {
				\Models\ContatoModel::enviarFormulario();
				
			}
			$this->view->render(array('titulo'=>'Home'));
		}
	}


 ?>