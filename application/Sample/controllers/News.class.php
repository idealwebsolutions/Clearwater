<?php

	/**
	* Defines a controller for handling the News page for the site
	*/
	class NewsController extends Controller { 

		public function onLoad() 
		{	
			switch(parent::getAction()) // switch depending on action/route
			{
				case 'default':
					// Our navigation component for access to site content
					$navModel = new Model('/', 'Navigation');
					$navigation = $navModel->getModel()->prepare('News');

					// Fetches news entries from storage (database)
					$model = new Model('/', 'Entries');
					$entries = $model->getModel()->prepare();

					// Point to our specific css assets location (TODO: Better method for attaching stylesheets)
					$stylesheets = array('/site/css/news.css');

					// Build our header view
					$header = new View('Header');
					$header->bind('title', 'News');
					$header->bind('stylesheets', $stylesheets);

					// Build our content view
					$view = new View('News');
					$view->bind('nav', $navigation);
					$view->bind('title', 'News');
					$view->bind('entries', $entries);
					
					// Build our footer view
					$footer = new View('Footer');
					$footer->bind('version', ClearWater::Version());
					break;
				default: // Custom override (you don't need to specify, there is an internal 404 handler)
					header("Location: http://www.mydomain.com");
					break;
			} 
		}
	}

?>