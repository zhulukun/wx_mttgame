<?php

	class User_model extends CI_Model {  
                              
        function __construct()  
        {  

            parent::__construct();
            $this->load->database(); 
        
        }

        //插入用户
        function insert_ref($openid,$story_id)
        {
        	$query=$this->db->query("INSERT INTO mtt_user(openid,story_id) VALUES('{$openid}',{$story_id})");
        	if ($this->db->affected_rows()>0) {
        		# code...
        		return TRUE;
        	}

        	return FALSE;
        }

       


}
?>