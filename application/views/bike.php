<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="js/jquery-2.1.3.js"></script>
  <script src="js/index.js"></script>
  <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"> </script>
  <script type="text/javascript">

    wx.config({
    debug: true, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
    appId: '', // 必填，公众号的唯一标识
    timestamp: , // 必填，生成签名的时间戳
    nonceStr: '', // 必填，生成签名的随机串
    signature: '',// 必填，签名，见附录1
    jsApiList: [] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
});

    

  </script>
	<title>骑行故事</title>
	<style type="text/css">
			body {
  padding: 0;
  margin: 0;
}
#content {
  position: relative;
  color: #fff;
}
#imgbk img {
  width: 100%;
}
#title-container {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 15%;
  text-align: center;
}
#header-container {
  z-index: -1;
  position: absolute;
  left: 0;
  top: 20%;
  width: 100%;
  height: 15%;
  text-align: center;
}
#header-container img {
  width: 50%;
}
#content-container {
  position: absolute;
  left: 10%;
  top: 45%;
  width: 80%;
  height: 25%;
  text-align: center;
  color: #000;
}
#content-container h1 {
  font-size: 18px;
}
#content-container p {
  font-size: 12px;
  line-height: 12px;
}
#btn-container {
  position: absolute;
  left: 0;
  bottom: 13%;
  width: 100%;
  height: 15%;
}
#btn-container a {
  position: absolute;
  top: 0;
  width: 30%;
  height: 80px;
  color: #fff;
  text-align: center;
  font-size: 12px;
  text-decoration: none;
}
#btn-container a:hover {
  color: #dedede;
}
#btn1 {
  left: 5%;
  padding-top: 35px;
}
#btn2 {
  left: 33%;
  padding-top: 25px;
}
#btn3 {
  left: 63%;
  padding-top: 35px;
}

	</style>
</head>
<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wx86ae866c6733ee72", "e0c1e0c57061910c57eea05bd672a3c1");
$signPackage = $jssdk->GetSignPackage();
print_r($signPackage);
?>
<body>
	<div id="content">
		<div id="imgbk">
			<img src="<?php echo base_url();?>img/bk.png" />
		</div>
		<div id="title-container">
			<h1 id="username"><?php echo $userinfo['nickname'];?></h1>
		</div>
		<div id="header-container">
			<img src="<?php echo $userinfo['headimgurl'];?>"/>
		</div>
		<div id="content-container">
			<h1 id="username-header"></h1>
			<div id="content-p"><?php echo str_replace('XXX' ,$userinfo['nickname'] ,$userinfo['content']);?></div>
		</div>
		<div id="btn-container">
			<a id="btn1" href="javascript:return false;">让大家看看</a>
			<a id="btn2" href="http://www.hao2b.cn/44006">马蹄骑行<br>智能骑行APP</a>
			<a id="btn3" href="http://game.mttsmart.com">我也要玩</a>
		</div>
	</div>

</body>
</html>