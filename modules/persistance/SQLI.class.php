<?php

	/**
	 * 
	 * SQLi - Defines a base class of which allows SQL transactions to occur (defaults to SQLi interface)
	 * 
	 **/

	class SQLi {
		
		private static $instance;
		
		private $dbHost = '';
		private $dbUser = '';
		private $dbPassword = '';
		private $dbName = '';
		private $driver = '';
		
		private $connected = false;
		
		private function __construct() { }
		
		public function setActiveDatabase($dbName) 
		{
			if($this->connected)
				$this->disconnect();

			$this->dbName = $dbName;
			$this->connect();
		}
		
		public static function getInstance() 
		{
            // If there is no instance, create one
			if (!isset(self::$instance)) 
			{
				$inst = __CLASS__;
				self::$instance = new $inst;
			}
			return self::$instance;
		}

		public function connect() 
		{
			if(!$this->connected) 
			{
				$this->driver = new mysqli($this->dbHost, $this->dbUser, $this->dbPassword, $this->dbName);
				if($this->driver) 
					$this->connected = true;
			}	
		}
		
		public function disconnect() 
		{
			if($this->connected) 
			{
				$disconnected = $this->driver->close();
				if($disconnected) 
					$this->connected = false;
			}
		}
		
		public function isConnected() 
		{
			return $this->connected;
		}
		
		public function select($query, $callback) {
			if($this->isConnected()) 
			{
				if($prepare = $this->driver->prepare($query)) 
				{
					if($callback != null)
						return $callback($prepare);
					return TRUE;
				}
			}
			return FALSE;
		}
		
		public function update($query, $callback) {
			if($this->isConnected()) 
			{
				if($rowData = $this->driver->prepare($query)) 
				{
					$rowData->execute();
          
          if($callback != null)
						return $callback();
          
          return TRUE;
				}
			}
      return FALSE;
		}
		
		private function __clone() {}
	}	

?>
