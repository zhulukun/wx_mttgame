<?php

class WX_Public {

    protected $CI;

    // We'll use a constructor, as you can't directly call a function
    // from a property definition.
    public function __construct()
    {
        // Assign the CodeIgniter super-object
        $this->CI =& get_instance();
    }

    public function foo($a)
    {
        echo($a);
        $this->CI->load->helper('url');
        redirect();
    }

    public function bar()
    {
        echo $this->CI->config->item('base_url');
    }

}