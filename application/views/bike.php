<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>骑行故事</title>
	<link rel="stylesheet" href="<?php echo base_url();?>css/index.css">
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
			<div id="content-p"><?php echo $story['content'];?></div>
		</div>
		<div id="btn-container">
			<a id="btn1" href="javascript:return false;">让大家看看</a>
			<a id="btn2" href="http://www.hao2b.cn/44006">马蹄骑行<br>智能骑行APP</a>
			<a id="btn3" href="?">我也要玩</a>
		</div>
	</div>
	<script src="js/jquery-2.1.3.js"></script>
	<script src="js/index.js"></script>
</body>
</html>