<?php

class models_Register extends MY_Model{
    
    function __construct(){
        parent::__construct();
        $this->_table = 'userinfo';
        $this->primary_key = 'USER_ID';
        $this->primaryFilter = 'htmlentities';
        $this->order_by = '';       
    }
    
    
    public function insert_new_user($data){
         $data = array("USER_ID" =>"20" );
        $this->insert( $data);  
    }
    
    
    
}

?>