<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
  width: 50%;
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
<body>
	<div id="content">
		<div id="imgbk">
			<img src="<?php base_url();?>img/bk.png">
		</div>
		<div id="title-container">
			<h1 id="username"><?php echo $userinfo['nickname'];?></h1>
		</div>
		<div id="header-container">
			
		</div>
		<div id="content-container">
			<h1 id="username-header"><img src="<?php echo $userinfo['headimgurl'];?>"/></h1>
			<div id="content-p"><?php echo $userinfo['content'];?></div>
		</div>
		<div id="btn-container">
			<a id="btn1" href="javascript:return false;">让大家看看</a>
			<a id="btn2" href="http://www.hao2b.cn/44006">马蹄骑行<br>智能骑行APP</a>
			<a id="btn3" href="">我也要玩</a>
		</div>
	</div>
	<script src="js/jquery-2.1.3.js"></script>
	<script src="js/index.js"></script>
</body>
</html>