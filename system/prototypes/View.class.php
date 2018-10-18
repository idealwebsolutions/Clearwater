<?php

	class View {

		private $path;
		private $template;
		private $data;

		public function __construct($path = "", $template) 
		{
			$this->path = strtolower($path);	
			$this->template = strtolower($template);
		}

		public function __destruct() 
		{
			$this->render();
		}

		public function bind($key, $value) 
		{
			$this->data[$key] = $value;
		}

		public function render() 
		{
			$data = $this->data;

			include APPLICATION.'/views/'.$this->path.$this->template.EXT;
		}

	}

?>