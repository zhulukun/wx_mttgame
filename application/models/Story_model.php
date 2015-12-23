<?php

	class Story_model extends CI_Model {  
                              
        function __construct()  
        {  

            parent::__construct();
            $this->load->database(); 
        
        }

        function get_story($openid)
        {
            $query=$this->db->query("SELECT rand FROM mtt_user WHERE openid='{$openid}'");

            $arr=array();

            foreach($query->result_array() as $row)
            {
                array_push($arr,$row);
            }
            if (count($arr)>0) {
                # code...
                $rand=$arr[0]['rand'];
                $query_story=$this->db->query("SELECT * FROM mtt_story WHERE id={$rand}");

                $story_arr=array();

                foreach($query_story->result_array() as $row)
                {
                    array_push($story_arr,$row);
                }

                return $story_arr;

            }

            return;

        }


}
?>