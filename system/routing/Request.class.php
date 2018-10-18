<?php

	/**
	* Defines a single request and its associated actions
	*/

	class Request {

		private $page;
		private $params;

		public function __construct($page, $params) 
		{
			$this->page = $page;
			$this->params = $params;
		}

		// Executes the controller called
		public function execute() 
		{
			$this->page = ucfirst($this->page);

			$file = APPLICATION.'controllers/'.$this->page.'.class'.EXT;
			include_once $file;
			$class = $this->page . 'Controller';

			try 
			{
				if(!is_file($file)) 
				{
					throw new RequestNotFoundException('Route not found');
				}
				else
				{
					if(class_exists($class))
					{
						$controller = new $class($this->params);
						$controller->onLoad();	
					}
				}
			} 
			catch(RequestNotFoundException $rnfe)
			{
				$model = new Model('/', 'Navigation');
				$nav = $model->getModel()->prepare('N');
				
				$view = new View('404');
				$view->bind('nav', $nav);
				$view->bind('version', ClearWater::Version());   
			} 
		}

	}

?>