<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('models_login');
        $this->load->model('models_session');
        
    }
    
    /**
     * Get the value of the form from POST method and check the database if user
     * exists.
     * @return void
     */
    public function login_user(){
        
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $password_md5 = md5($password);
        $user_id  = $this->models_login->getUserId( $username, $password_md5);
        
           if ( $user_id == -1) {
            $data = array(
                'status' => false,
                'message' => "Please Check your Username/Password",
            );
            echo json_encode($data);
            
        } else {
            $this->models_session->save_logged_in( $user_id );
            $data = array(
                'status' => true,
                'message' => "ok",
                'forward_url' => base_url(). 'login/profile',
            );
            echo json_encode($data);
        }
    }
    
    public function profile(){
        $this->load->view('profile');
    }
    
    public function check_login(){
        $data = array( "status" => $this->models_session->is_user_logged_in()
                
                );
            
        echo json_encode( $data);
        
        
    }
    
    
    
    
    
    
    
    
    
    
}



?>