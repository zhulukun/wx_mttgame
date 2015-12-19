<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get extends CI_Controller {

	function __construct()
    {

        parent::__construct();

        $this->load->helper('url');
        $this->load->library('session');
               
    }
	public function index()
	{
		echo $_GET['code'];

		echo 'hello';
	}
}
