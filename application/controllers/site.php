<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('models_session');
        
        
    }

    public function index(){
        $this->login();
        
    }
    
    public function login(){
        if ( $this->models_session->is_user_logged_in() == true ) {
            //echo "you are already login";
            header('location:' . base_url() .'login/profile');
        } else {
            
            $this->load->view('login');
        }
        
    }
    
    public function logout(){
        $this->models_session->logout_user();
        $this->login();
        
        
        
    }
    
    public function register(){
        $this->load->view('register');
        
    }
}

?>