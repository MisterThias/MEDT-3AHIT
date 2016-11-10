<!DOCTYPE HTML5>

<html>
	<header>
	<meta charset="utf-8">
	<title>PHP Form Demo 1</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	</header>
	
	<body>
	<div class="container-fluid">
		<div class="row">
		<div class="container">
		<?php 

		if(isset($_GET['submitter'])){
		echo "<div class= \"page-header\">
 		<h1 style=\"color:".$_GET['co']."\">".$_GET['vn']."<small> ".$_GET['nn']."</small></h1>
		</div>";		}

	?>
		<form class="form-inline" action="http://localhost/UE4/formhuebootstrapwithphp.php">
  			<div class="form-group col-lg-12 col-xs-12">
    			<input type="text" class="form-control" id="InputFirstName" placeholder="Your first name" name="vn" style="width:100%;">
  			</div>
  			<div class="form-group col-lg-12 col-xs-12">
       			<input type="text" class="form-control" id="InputLastName" placeholder="Your last name" name="nn" style="width:100%;">
  			</div>
  			<div class="form-group col-lg-12 col-xs-12">
    			<input type="text" class="form-control" id="InputColor" placeholder="Your color" name="co" style="width:100%;">
  			</div>
  			
  			<div class="text-center">
  			<button type="submit" class="btn btn-default" name="submitter">Log in</button>
			</div>
		</form>
		</div>
		</div>	
	</div>
	</body>
</html>