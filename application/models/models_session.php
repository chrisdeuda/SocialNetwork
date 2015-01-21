<?php

class Models_Session extends My_Model{

	   /**
     * Save the user_id into ci_session_variable
     * @param type $user_id - current user login
     * @return void
     */
    public function save_logged_in($user_id){
        $data = array(
                    "user_id"  => $user_id,
                    "is_logged_in" => 1
		);
        $this->session->set_userdata( $data);
        
    }
    
    /**
     * Clear the session variable of user that is currently logged
     * @return void
     */
    public function logout_user(){
        $this->session->sess_destroy();
    }
    /**
     * Check if the user is currently logged in the website
     * @return boolean
     */
    public function is_user_logged_in(){
        if ( $this->session->userdata('is_logged_in') == true ) {
            return true;
        } else {
            return false;
        }
    }
}
?>