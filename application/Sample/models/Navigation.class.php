<?php
	
	/*
	* Navigation without SQL setting up the site's navigation model
	*/

	class Navigation {

		private $nav = array('News' => '/news', 'About' => '/about', 'Resources' => '/resources', 'Projects' => '/projects'); //'Contact' => '/contact'

		public function prepare($active)
		{
			$output[] = '<ul class="nav nav-pills pull-right">';
			foreach($this->nav as $key => $value)
			{
				$output[] = $active === $key ? '<li class="active"><a href="'.$value.'">'.$key.'</a></li>' : '<li><a href="'.$value.'">'.$key.'</a></li>';
			}
			$output[] = '</ul>';
			$out = implode('', $output);
			return $out;
		}
	}
?>