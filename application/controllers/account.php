<?php

class Account extends CI_Controller {
	
	public function index() {
		$this->load->view('accounts/register_form');

	}

}