<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
    private $user_id    = "";

    private $email      = "";
    private $username   = "";
    private $password   = "";
    private $reTypePassword = "";
    private $fname      = "";
    private $lname      = "";
    private $mi         = "";
    private $gender     = "";
    private $address    = "";
    private $contactno  = "";
    private $date_joined    = "";
    private $profile_pic    = "";
    private $membership_type = "";
    private $birthMonth = "";
    private $birthYear = "";
    private $birthDay = "";
    
    public function __construct(){
        parent::__construct();
        $this->load->model('models_register');
        
    }

    public function register(){
        $form['femail']      = $this->input->post('username');
        $form['username']   = $this->input->post('username');
        $form['password']   = $this->input->post('password');
        $form['reTypePasswor'] = $this->input->post('reTypePassword');
        $form['fname']      = $this->input->post('firstname');
        $form['lname']      = $this->input->post('lastname');
        $form['gender']     = $this->input->post('gender');
        $form['birthMonth'] = $this->input->post('birthMonth');
        $form['birthYear']  = $this->input->post('birthYear');
        $form['birthDay']   = $this->input->post('birthDay');
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        echo "USERNAME" . $user ;
        
        
        
        
        if (isset($user) || empty($user)){
            //echo "No result";
        } else {
            //echo "Found something". $user;
        }
        
        
        
        
        
           
    }
    
    public function checkUserExists(){
        
        
    }
    
    public function checkUsernameExist(){
        
        
    }
    
    public function checkEmailExist(){
        
        
    }
    
    
    
    
}

?>