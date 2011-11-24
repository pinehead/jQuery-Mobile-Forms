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
<!--
Show disable form elements
Show all form elements 
Transfer to php and display restults
Disable ajax
-->

<form action="results2.php" id="form2" method="POST" data-ajax="false">

<div data-role="fieldcontain">
 <label for="text">Text Input:</label>
 <input type="text"  name="text" id="text" value="" />
</div>


<div data-role="fieldcontain">
	<label for="slider">Input Slider:</label>
	<input type="range" name="slider" id="slider" value="25" min="0" max="100" />
</div>


<div data-role="fieldcontain">
	<label for="flip">Flip Switch</label>
	<select name="flip" id="flip" data-role="slider">
	<option value="no">No</option>
	<option value="yes">Yes</option>
	</select>
</div>

<div data-role="fieldcontain">
	<fieldset data-role="controlgroup">
		<input type="radio" name="radio1" id="radio-choice-1" value="choice-1" />
		<label for="radio-choice-1">Cat</label>
		
		<input type="radio" name="radio1" id="radio-choice-2" value="choice-2" />
		<label for="radio-choice-2">Dog</label>
	</fieldset>
</div>

<div data-role="fieldcontain">
	<fieldset data-role="controlgroup">
	<legend>Agree to the terms:</legend>
	<input type="checkbox" name="checkbox1" id="checkbox-1" class="custom" />
	<label for="checkbox-1">I agree</label>
	</fieldset>
</div>


<label for="select" class="select">Shipping method:</label>
<select name="select" id="select-choice-1">
	<option value="standard">Standard</option>
	<option value="Not-Standard">Not-Standard</option>
</select>


<input type="submit" value="Submit Form" id="submit" data-theme="a" />
</form>



</body>
</html>