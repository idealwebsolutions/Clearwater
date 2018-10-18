<?php

	/**
	* Bootstrap - Executes the given core environment 
	*/

	// Check to see if our system has been defined
	if(DEFINED('SYSTEM')) {

		if(is_file(SYSTEM.'ClearWater.class'.EXT)) 
		{
			require SYSTEM.'ClearWater.class'.EXT;
		}
	}

	// Begin autoloading classes
	spl_autoload_register(array('ClearWater', 'Autoload'));

	// Load any modules wanted
	ClearWater::LoadModules(array(
		'dblayer'	=> 'persistance/SQLI'
	));

	// Load environment parameters
	ClearWater::Init();

	// Set default route
	Router::Set('default', 'News');

?>																																				