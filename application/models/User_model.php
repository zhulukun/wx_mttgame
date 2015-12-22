<?php

	class User_model extends CI_Model {  
                              
        function __construct()  
        {  

            parent::__construct();
            $this->load->database(); 
        
        }

        //插入用户
        function insert_user($openid,$name,$avatar_url)
        {
        	$query=$this->db->query("INSERT INTO mtt_user(openid,name,avatar_url) VALUES('{$openid}','{$name}','{$avatar_url}')");
        	if ($this->db->affected_rows()>0) {
        		# code...
        		return TRUE;
        	}

        	return FALSE;
        }

        //判断用户是否存在
        function is_user_exist($openid)
        {
        	$query=$this->db->query("SELECT * FROM mtt_user WHERE openid='{$openid}'");
        	$arr = array();

	        foreach($query->result_array() as $row)
	        {
	            array_push($arr,$row);
	        }
	        if (count($arr)>0) {
	        	# code...
	        	return TRUE;
	        }
	        return FALSE;
        }


}
?>