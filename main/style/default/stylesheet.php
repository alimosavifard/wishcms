<?php
	   define('ROOT', getcwd());

echo ROOT;
?>


/*----------------------  Body --------------------------*/
body {	 
	width:<?php echo $data['body_width']; ?>px;
	background:#<?php echo $data['body_background_color']; ?>;
	color:<?php echo $data['body_font']['color']; ?>;
	font-family: <?php echo $data['body_font']['face']; ?>;
	font-size: <?php echo $data['body_font']['size']; ?>px;
}





