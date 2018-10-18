<?php
	
	/* A reusable exception customized to handle individual problems */
	abstract class CustomException extends Exception { 

		public function toString() {
			return 'Exception thrown: '.parent::getMessage().' ';
		}

	} 

?>