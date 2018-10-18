<?php

	class Entries extends DatabaseAdapter {

		// Input logic
		protected function fetch() 
		{
			$result = parent::getCursor()->select('SELECT * FROM `news` ORDER BY id DESC LIMIT 2', function($statement) {

				$idx = 0;
				$titles = array();
				$dates = array();
				$posts = array();

				$statement->execute();
				$statement->bind_result($id, $title, $date, $post);
				
				while($statement->fetch()) 
				{
					$titles[$idx] = $title;
					$dates[$idx] = $date;
					$posts[$idx] = $post;
					$idx++; 
				} 

				return array('titles' => $titles, 'dates' => $dates, 'posts' => $posts);
			});
				
			return $result;
		}

		// 
		protected function save()
		{
		}

		// Output logic
		public function prepare()
		{
			$entries = $this->fetch();
            $num = count($entries['posts']);
            $output[] = ""; 

            for($i = 0; $i < $num; $i++) // TODO: Create article component model
            {
            	$output[] = "<article class='news_".($i + 1)."'>";
                $output[] = "<h1 class='page-header text-center'> < ".$entries['titles'][$i]." > <small>Posted on ".$entries['dates'][$i]."</small></h1>";
                $output[] = "<p class='post text-center'>".$entries['posts'][$i]." </p>";
                $output[] = "</article>";
            } 
            $out = implode('', $output);
            return $out;
		}

	}

?>