<!DOCTYPE html> 
<html> 
	<head> 
	<title>Pinehead.tv Forms Part 1</title> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.css" />
<script src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.js"></script> 
</head> 
	<body> 
		<div data-role="page"> 
	 	 <div data-role="header"> 
		<h1>Pinehead</h1> 
	</div>
	<!-- /header --> 
	<div data-role="content">	
	
	  <form id="myForm" method="post" action="result.php" data-transition="pop">
	   <fieldset>
	    <div data-role="fieldcontain">
	    
	    	<label for="firstName">First Name</label>
	    	<input type="text" name="firstName" />
	    	
	    	<input type="submit" value="Show my first name" />
	    
	    </div>
	   </fieldset>
 	 </div>		
	</form>
</div><!-- /page --> 
 
</body> 
</html>