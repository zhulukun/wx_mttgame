<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get extends CI_Controller {

	function __construct()
    {

        parent::__construct();

        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('User_model');
        $this->load->model('Story_model');
               
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
			$this->session->set_userdata('openid',$openid);
			$this->session->set_userdata('access_token',$access_token);
			header("Location:http://game.mttsmart.com/get/user_home/openid/{$openid}");			
			return;
		}

			
		
	}

	public function user_home()
	{
		if (isset($_SESSION['openid']) && isset($_SESSION['access_token'])) {
			# code...
			$openid=$_SESSION['openid'];
			$access_token=$_SESSION['access_token'];
			$userinfo_url="https://api.weixin.qq.com/sns/userinfo?access_token={$access_token}&openid={$openid}&lang=zh_CN";
			//echo $userinfo_url;
			$userinfo_json=file_get_contents($userinfo_url);
			$userinfo=(array)json_decode($userinfo_json,TRUE);

			if (!$this->User_model->is_user_exist($openid)) {
					# code...
					$rand=rand(1,10);
					// echo($rand);
					// die();
					$this->User_model->insert_user($openid,$userinfo['nickname'],$userinfo['headimgurl'],$rand);

				}

			$this->session->set_userdata('nickname',$userinfo['nickname']);
			$this->session->set_userdata('headimgurl',$userinfo['headimgurl']);

			$userinfo=array(
						'nickname' => $_SESSION['nickname'],
						'headimgurl' => $_SESSION['headimgurl']
										);

			$arr_story=$this->get_story();
			$userinfo['content']=$arr_story[0]['content'];
			$data['userinfo']=$userinfo;
			
		}
		else
		{
			$openid=$this->uri->segment(4,0);
			echo $openid;
			die();

		}

		$this->load->view('bike',$data);
	}

	function get_story()
	{
		$story=$this->Story_model->get_story($_SESSION['openid']);
		return $story;

	}

	function get_userstory($openid)
	{
		$story=$this->Story_model->get_story($openid);
		return $story;
	}
}
?>
