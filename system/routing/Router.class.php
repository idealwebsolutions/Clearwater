<?php

	/**
	* Routes all requests given to their appropriate location
	*/ 

	class Router {

		private static $map;

		// Sets given key to route path
		public static function Set($key, $path)
		{
			self::$map[$key] = $path;
		}

		// Returns route 
		public static function Get($key)
		{
			return self::$map[$key];
		}

		// Parse and dispatch a single request
		public static function Dispatch() 
		{
			$uri = $_SERVER['REQUEST_URI'];

			$uri = urldecode($uri);

			$params = explode('/' , $uri);

			$params = array_filter($params);
			
			$page = empty($params) ? Router::Get('default') : current($params);

			$page = str_replace('-', '', $page);

			unset($params[1]);

			return new Request($page, $params); 
		}
		
	}
?>

