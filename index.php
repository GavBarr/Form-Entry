<?php

	$emsg = $f = $l = $p = $ec = "";
	
	
	
		if(isset($_GET['f'])) $f = $_GET['f'];
		if(isset($_GET['p'])) $p = $_GET['p'];
		if(isset($_GET['l'])) $l = $_GET['l'];
		if(isset($_GET['ec'])) $ec = $_GET['ec'];
		
		switch ($ec)
		{ case 0: $emsg .= "<p>Fill Everything Out!</p>"; break;
			case 7: //all three
			case 5: //first and phone
			case 6: //last and phone
			case 4: $emsg .= "<p>Wrong Format for Phone Number (xxx)xxx-xxxx</p>"; if ($ec == 4) break;//phone
			case 3: //first and last	
			case 1: if($ec != 6) $emsg .= "<p>Wrong Format for First Name</p>"; if ($ec == 1 || $ec == 5) break;//first
			case 2: $emsg .= "<p>Wrong Format for Last Name</p>"; if ($ec == 2) break;//last
		}
	
 ?>
 <!DOCTYPE html>
<html>
	<head>
		<title>Validation</title>
		<link type="text/css" rel="stylesheet" href="/validation/css/style.css">
		<script src="js/script.js"></script>
	</head>
	<body >
	
	
<?php	
	echo form($f, $l, $p, $emsg);

	?>
			
	<body>
</html>

 <?php
			function form($f, $l, $p, $emsg)
			{
				$return = "";
				
				$return .= '<div class = "box">';
					$return .= '<div class = "box-box">';
					$return .= '<form method="post" action="process.php">';
						$return .= '<input placeholder="First Name" value="'.$f.'" type="text" name="first">';
						$return .= '<input placeholder="Last Name" value="'.$l.'" type="text" name="last">';
						$return .= '<input placeholder="Phone" value="'.$p.'" type="text" name="phone">';
						$return .= '<input type="reset" class="reset">';
						$return .= '<input type="submit" name="sub-button" class="sub">';
						$return .= '</form>';	
						$return .= $emsg;	
					$return .= '</div>';
				$return .= '</div>';
				
				return $return;
				
			}
 ?>
 
