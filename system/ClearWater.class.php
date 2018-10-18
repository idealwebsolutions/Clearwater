<?php 

/*
* Environment 
* @version 0.6
* @description 
*/

class ClearWater {

	// Defines the version of this environment
	const VERSION = 'v0.0.6';
	
	// Defines current modules used by the environment
	private static $modules;
	
	// Defines our logger
	private static $log;

	// Automatically loads all given classes using the special autoload register
	public static function Autoload() 
	{
		require SYSTEM.'debug/CustomException.class'.EXT;
		require SYSTEM.'debug/CustomExceptionHandler.class'.EXT;

		require SYSTEM.'debug/exceptions/RequestNotFoundException.class'.EXT;

		require SYSTEM.'routing/Router.class'.EXT;
		require SYSTEM.'routing/Request.class'.EXT;

		require SYSTEM.'prototypes/Controller.class'.EXT;
		require SYSTEM.'prototypes/Model.class'.EXT;
		require SYSTEM.'prototypes/View.class'.EXT;
		
		require SYSTEM.'prototypes/adapters/DatabaseAdapter.class'.EXT;
	}
	
	// Loads given modules
	public static function LoadModules($modules) 
	{
		self::$modules = $modules;
		
		foreach($modules as $module) {
			include_once MODULES.$module.'.class'.EXT;
		} 
	}
	
	// Initializes the environment
	public static function Init() 
	{
		// Initialize the main error handler
		//set_error_handler('ErrorHandler::handle');

		// Initialize the main exception handler
		set_exception_handler('CustomExceptionHandler::handle');

		// Initialize the logger

	}

	// Version
	public static function Version()
	{
		return self::VERSION;
	} 
}

?>
