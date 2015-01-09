<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {


    public function login(){
        $this->load->view('login');
    }
    
    public function register(){
        $this->load->view('register');
        
    }
}

?>