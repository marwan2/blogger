<?php

class Hellos extends CI_Controller {
	
	public function welcome($to = "Sir") {
		
		echo 'Hello '.$to.' '.PHP_EOL;

	}

}