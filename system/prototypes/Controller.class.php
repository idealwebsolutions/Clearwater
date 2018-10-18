<?php

	class Controller {

		protected $action;
		protected $params;

		public function __construct($params) 
		{	
			if(empty($params))
			{
				$this->action = 'default';
			}
			else 
			{
				$this->action = current($params);
				$this->params = array_slice($params, 1);
			}
		}

		public function getAction()
		{
			return $this->action;
		}

		public function getParameters()
		{
			return $this->params;
		}

		public function parseKeyValues($params)
		{
			$spl = explode('&', $params);
			$GET = null;

			foreach($spl as $param)
			{
				$keyval = explode('=', $param);
				$GET[$keyval[0]] = $keyval[1];
			}
			return $GET;
		}
	}

?>