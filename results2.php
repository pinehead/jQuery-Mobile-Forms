<?PHP
//Grab the form elements using PHP
$text 		= $_POST['text'];
$slider 	= $_POST['slider'];
$flip 		= $_POST['flip'];
$radio		= $_POST['radio1'];
$checkbox 	= $_POST['checkbox1'];
$select		= $_POST['select'];

?>

<!DOCTYPE html> 
<html> 
	<head> 
	<title>Page Title</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
</head> 

<body> 

<h3>Your form results</h3>

Text:<?=$text;?>
<br />
Slider:<?=$slider;?>
<br />
Flip:<?=$flip;?>
<br />
Radio:<?=$radio;?>
<br />
Checkbox:<?=$checkbox;?>
<br />
Select:<?=$select;?>

</body>
</html>
