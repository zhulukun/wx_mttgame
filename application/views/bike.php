<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body
		<?php print_r($userinfo);?>
       <?php foreach ($userinfo as $item): ?>  
       		<?php echo $item['nickname'];?>
           <?php endforeach; ?>  

<p></p>

</body>
</html>
