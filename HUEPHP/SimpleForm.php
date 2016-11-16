<!DOCTYPE HTML5>

<html>
	<header>
	<meta charset="utf-8">
	<title>PHP Form Demo 1</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<style type="text/css">

		.animated {
	 		 -webkit-animation-duration: 2s;
	 		 animation-duration: 2s;
	         -webkit-animation-fill-mode: both;
	 		 animation-fill-mode: both;
			}
		@-webkit-keyframes fadeInUp {
	  		from {
	   			 opacity: 0;
	             -webkit-transform: translate3d(0, 100%, 0);
	    	     transform: translate3d(0, 100%, 0);
	  		}

	  		to {
	    		 opacity: 1;
	             -webkit-transform: none;
	    		 transform: none;
	  		}
		}

		@keyframes fadeInUp {
	  		from {
	    		 opacity: 0;
	             -webkit-transform: translate3d(0, 100%, 0);
	             transform: translate3d(0, 100%, 0);
	 		 }

	 		 to {
	   			 opacity: 1;
	             -webkit-transform: none;
	    		 transform: none;
	 		 }
		}

		.fadeInUp {
	         -webkit-animation-name: fadeInUp;
	  		 animation-name: fadeInUp;
		}

	</style>
	</header>
	
	<body>
	<div class="container-fluid">
		
		<div class="container">
		<div class="page-header">
			<h1 style="color:#b30000;">Login <small>Form</small></h1>
		</div> 
		<div class="container-fluid">
		<form class="form-inline" action=<?php echo $_SERVER['PHP_SELF']; ?>>
		<div class="row">
  			<div class="form-group col-lg-12 col-xs-12">
  			<label>First Name</label>
    			<input type="text" class="form-control" id="InputFirstName" placeholder="Your first name" name="vn" style="width:100%;">
  			</div>
  			<div class="form-group col-lg-12 col-xs-12">
       			<label>Last Name</label>
       			<input type="text" class="form-control" id="InputLastName" placeholder="Your last name" name="nn" style="width:100%;">
  			</div>
  			<div class="form-group col-lg-12 col-xs-12">
    			<label>Email address</label>
    			<input type="text" class="form-control" id="InputEmail" placeholder="Your email address" name="em" style="width:100%;">
  			</div>
  			
  			<div class="text-center col-lg-12 col-xs-12" style="padding-top: 15px;">
  			<button type="submit" class="btn btn-danger" name="submitter">Log in</button>
			</div>
			</div>
		</form>

		<?php 

		if(isset($_GET['submitter'])){
			echo "<div class=\"jumbotron animated fadeInUp\"><h1 style=\"color:#b30000;\">".$_GET['vn']."<small> ".$_GET['nn']."</small></h1><p>Your email address is: <span style=\"color:#b30000;\">".$_GET['em']."</span>";}
			

		?>
		</div>
		</div>
		</div>	
	</div>
	</body>
</html>