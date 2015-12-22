<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get extends CI_Controller {

	function __construct()
    {

        parent::__construct();

        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('User_model');
               
    }
	public function index()
	{
		header("Content-type: text/html; charset=utf-8");
		$userinfo=array();

		if (isset($_SESSION['code'])) 
		{
			$code=$_SESSION['code'];
		}
		else
		{
			$code='';
		}
		if($_GET['code']!=$code)
		{
			$this->session->set_userdata('code',$_GET['code']);
			$code1=$_GET['code'];
			$url="https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx86ae866c6733ee72&secret=e0c1e0c57061910c57eea05bd672a3c1&code={$code1}&grant_type=authorization_code";
			$json=file_get_contents($url);

			$json_array=(array)json_decode($json,TRUE);
			$access_token=$json_array['access_token'];
			$openid=$json_array['openid'];

			$userinfo_url="https://api.weixin.qq.com/sns/userinfo?access_token={$access_token}&openid={$openid}&lang=zh_CN";
			//echo $userinfo_url;
			$userinfo_json=file_get_contents($userinfo_url);
			$userinfo=(array)json_decode($userinfo_json,TRUE);

			if (!$this->User_model->is_user_exist($openid)) {
				# code...
				$this->User_model->insert_user($openid,$userinfo['nickname'],$userinfo['headimgurl']);
			}


			$this->session->set_userdata('nickname',$userinfo['nickname']);
			$this->session->set_userdata('headimgurl',$userinfo['headimgurl']);

		}
		else
		{
			$userinfo=array(
					'nickname' => $_SESSION['nickname'],
					'headimgurl' => $_SESSION['headimgurl']
				);
		}

		$data['userinfo']=$userinfo;


		//print_r($userinfo);
		$this->load->view('bike',$data);
	}
}
?>
