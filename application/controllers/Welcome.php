<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
    {

        parent::__construct();

        $this->load->helper('url');
        $this->load->library('session');
               
    }
	public function index()
	{
		$url=
		$code=file_get_contents($url);
	}
}
