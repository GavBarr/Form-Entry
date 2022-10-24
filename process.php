<?php
	$ec = 0;
	if(!empty($_POST['first']) && !empty($_POST['last']) && !empty($_POST['phone']))
	{
		if(!preg_match("/\w+/", $_POST['first'])) $ec +=1;
		if(!preg_match("/\w+/", $_POST['last'])) $ec +=2;
		if(!preg_match("/\(\d{3}\)\d{3}-\d{4}/m", $_POST['phone'])) $ec +=4;
		
		if($ec) header('location: .?ec='.$ec.'&f='.$_POST['first'].'&p='.$_POST['phone'].'&l='.$_POST['last']);
	}
	else
	{
		header('location: .?ec=0&f='.$_POST['first'].'&p='.$_POST['phone'].'&l='.$_POST['last']);
	}
	?>
	<html>
	<head>
		<title>Process</title>
		<link type="text/css" rel="stylesheet" href="/validation/css/style.css">
		<script src="js/script.js"></script>
	</head>
	<body >

			<div class="box">
				<div class="box-box">
					<?php 
								echo '<h1>Thank You</h1>';
								echo '<h1>All Information is Valid!</h1>';
								echo '<h2>'.$_POST['first'].' '.$_POST['last'].'</h2>';
								echo '<h2>PhoneNumber: '.$_POST['phone'].'</h2>';
					?>
				</div>
			</div>
	</body>
	</html>



	


