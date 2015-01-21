<?php

class Models_Login extends CI_Model{
    
    public function __construct(){
        parent::__construct();
        $this->_table = TBL_USERS;
        $this->primary_key = 'USER_ID';
        $this->primaryFilter = 'htmlentities';
        $this->order_by = '';      
            
    }
    /**
     * Get User Id
     * @param string $user - username
     * @param string(md5) $pass - password
     * @return string user_id/ -1 no match found
     */
    public function getUserId( $user, $pass ) {
        $SQL = "SELECT USER_ID FROM $this->_table WHERE USERNAME = '{$user}' AND PASSWORD = '{$pass}'" ;
        
        $query = $this->db->query( $SQL);
        
        if ( $query->num_rows() <= 0) {
                return -1;
        } else if ($query->num_rows() == 1 ) {
                $row = $query->row();
                return $row->USER_ID;
        } else{
            return -1;
        }
        
    }
    
 
    
    
    
}

?>