<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function home($username, $password)
	{
		echo "username  : ". $username;
		echo "password  : ". $password;


		$this->load->view("home");
	}
}

?>