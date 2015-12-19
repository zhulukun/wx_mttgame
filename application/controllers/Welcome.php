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
		header("Location:https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx86ae866c6733ee72&redirect_uri=http%3a%2f%2fgame.mttsmart.com%2fget&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect");
	}
}
