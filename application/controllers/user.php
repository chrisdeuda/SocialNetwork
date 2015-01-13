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
        $this->load->model('models_console');
        
        
    }

    public function register(){
        $success_validation = FALSE;
        $is_email_exists = FALSE;
        $is_username_exists = FALSE;
        
        $data = $this->_processRegForm();
        
        //$this->password       = $this->input->post('password');
        //$this->reTypePassword = $this->input->post('reTypePassword');
        
        if ($this->password !== $this->reTypePassword ) {
            $success_validation = FALSE;
            //echo "echo not the same";
        } else if ( $this->password == $this->reTypePassword ){
            //echo "same" . $this->password . " " . $this->reTypePassword;
        }
        $is_email_exists = $this->_checkDataExist( TBL_USER_PROFILE, "EMAIL" , $this->email );
        $is_username_exists = $this->_checkDataExist( TBL_USERS, "USERNAME" , $this->username );
        
        //user must change email
        if ($is_email_exists == TRUE) {
            $success_validation = FALSE;
        } else {
            $success_validation = TRUE;
        }
        
        //user must change username
        if ($is_username_exists == TRUE) {
            $success_validation = FALSE;
            //echo "change your username";
        } else {
            $success_validation = TRUE;
        }
        
        if ( $success_validation == TRUE ){
            $this->models_register->insert_new_user( $data['form'], $data['user'],$this->username, $this->user_id);
            echo json_encode( array("status"=>1));
        } else {
            echo json_encode( array("status"=>0));
        }
        

              
    }
    /**
     * get all values base on ajax reques
     * @return data array
     */
    private function _processRegForm(){
        $this->user_id    = $this->_generateId();
        $this->email      = $this->input->post('username');
        $this->username   = $this->input->post('username');
        $this->password   = $this->input->post('password');
        $this->reTypePassword = $this->input->post('reTypePassword');
        $this->fname      = $this->input->post('firstname');
        $this->lname      = $this->input->post('lastname');
        $this->gender     = $this->input->post('gender');
        $this->birthMonth = $this->input->post('birthMonth');
        $this->birthYear  = $this->input->post('birthYear');
        $this->birthDay   = $this->input->post('birthDay');
        $this->date_joined      = time();
        
       
        /*
        $this->user_id    = $this->_generateId();
        $this->email      = "hacker@gmail.com";
        $this->username   = "my_username1";
        $this->password   = "1";
        $this->reTypePassword = "0asdfasdf";
        $this->fname      = "fname";
        $this->lname      = "lastname";
        $this->gender     = "e";
        $this->birthMonth = "df";
        $this->birthYear  = "d";
        $this->birthDay   = "sdf";*/
        //$this->date_joined      = $this->_getDateNow();
        $this->profile_pic = DEFAULT_IMAGE;
        
        $this->position = 0;
        
        $data['form'] = array( "ID" => NULL,
            "USER_ID"       => $this->user_id,
            "EMAIL" => $this->email,
            "FIRST_NAME"    => $this->fname,
            "LAST_NAME"     => $this->lname,
            "MI"            => $this->mi,
            "GENDER"        => $this->gender,
            "ADDRESS"       => $this->address,
            "CONTACT"       => $this->contactno,
            "DATE_JOINED"   => $this->date_joined,
            "IMAGE"         => $this->profile_pic,
            "ACTIVATED"     => 0,
        );
                
        $data['user'] = array("ID" => NULL,
           "USER_ID" => $this->user_id,
           "USERNAME" => $this->username,
           "PASSWORD" => md5($this->password),
           "USER_TYPE" => $this->position
        );
        
        return $data;
    }
    /**
     * For checking if particular data already exists
     * @param type $table_name - must be a valid table name
     * @param type $table_column - must ba
     * @param type $data
     * @return boolean
     */
    private function _checkDataExist( $table_name = "", $table_column = "", $data ="") {
        $SQL = "SELECT `USER_ID` FROM `{$table_name}` WHERE `{$table_column}` = '{$data}'";
        $query = $this->db->query( $SQL );
        if ( $query->num_rows() <= 0) {
            return false;
        } else {
            return true;
        }
    }
    
    public function checkUserExists(){
        
        
    }
    
    public function checkUsernameExist(){
        
        $username = $this->input->post('username');
        
       
        $is_email_exists = $this->_checkDataExist( TBL_USERS, "USERNAME" , $username );
        if ( $is_email_exists == TRUE) {
            $data = array("status" => 1, "message"=>"Username Already");
            echo json_encode($data) ;
        } else {
            $data = array("status" => 0, "message"=>"ok");
            echo json_encode($data) ;
        }
        
        
    }
    
    public function checkEmailExist(){
        $email = $this->input->post('email');
        
        $is_email_exists = $this->_checkDataExist( TBL_USER_PROFILE, "EMAIL" , $email );
        if ( $is_email_exists == TRUE) {
            $data = array("status" => 1, "message"=>"Email Exists Already");
            echo json_encode($data) ;
        } else {
            $data = array("status" => 0, "message"=>"ok");
            echo json_encode($data) ;
        }
    }
    
    private function _generateId(){
        //sample 2013-random - seconds
        $time = time();
        $year =  date('Y', $time);
        //$actual_time = date('s', $time); 

        //$random = rand(1, 500);
        $user_id = $year. '-'. $this->_getTimeNow();

        return $user_id;
    }
    
    private function _getDateNow(){
        $date = date ('Y-m-d');
        return $date;

    }

    private function _getTimeNow(){
        $time = time();
        $actual_time = date('his', $time);
        
        return $actual_time;
    
    }

    
    
}

?>