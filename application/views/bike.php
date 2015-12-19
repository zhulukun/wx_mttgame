<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<?php echo $userinfo['nickname'];?>
				<?php print_r($data);?>

        <?php foreach ($userinfo as $item): ?>  
        	<?php print_r($item);?>
       		 <?php //echo $item['nickname'];?>
           <?php endforeach; ?>  


</body>
</html>
