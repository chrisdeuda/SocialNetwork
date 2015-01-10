<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        
        
    }

    public function index(){
        $this->load->view('login');
    }
    public function login(){
        $this->load->view('login');
    }
    
    public function register(){
        $this->load->view('register');
        
    }
}

?>