<?php

class models_Register extends MY_Model{
    
    function __construct(){
        parent::__construct();
        $this->_table = 'userinfo';
        $this->primary_key = 'USER_ID';
        $this->primaryFilter = 'htmlentities';
        $this->order_by = '';       
    }
    
    
    
    public function insert_new_user( $form_data, $form_user,$username, $user_id){
        $query = $this->db->insert( TBL_USER_PROFILE , $form_data);
        if ( $query != 1) {
                return "error";
        } else {
            $query_user = $this->db->insert(TBL_USERS , $form_user);
            if ( $query_user != 1) {
                return "Eror";
            } else {
                //$this->load->model("models_users");
                //$this->models_users->saveUserSession( $username, $user_id);
                //echo "Save Success!";
                //redirect("". base_url(). "site/index");
            }
        }
    }
    
    
    
    
}

?>