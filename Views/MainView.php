<?php 
	namespace Views;

	/**
	 * 
	 Responsavel por configurar a renderização da tela
	 */
	class MainView
	{
		private $filename;
		private $header;
		private $footer;
		const titulo = 'Portifolio Eduardo Rafael';
		function __construct($filename,$header = 'header',$footer = 'footer')
		{
			$this->filename = $filename;
			$this->header = $header;
			$this->footer = $footer;
		}
		public function render($arr = []){
			include('pages/templates/'.$this->header.'.php');
			include('pages/'.$this->filename.'.php');
			include('pages/templates/'.$this->footer.'.php');
		}
	}



 ?>