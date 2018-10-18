<?php
	
	/**
	* Defines a model to our controller
	*/

	class Model {

		private $path;
		private $template;
		private $class;

		public function __construct($path, $template)
		{
			$this->path = $path;
			$this->template = $template;

			include APPLICATION.'/models'.$this->path.''.$this->template.'.class'.EXT;

			$this->class = new $this->template;
		}

		public function getModel()
		{
			return $this->class;
		}
	}


?>