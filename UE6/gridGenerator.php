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
			<h1 style="color:#b30000;">Gridgenerator</h1>
		</div> 
		<div class="container-fluid">
		<form class="form-inline" action=<?php echo $_SERVER['PHP_SELF']; ?> method="POST">
			<div class="row">
  				<div class="form-group col-lg-12 col-xs-12">
    				<input type="checkbox" class="form-control" value="Sunday" name="days[]" style="width:3%;"><label>Sunday</label>
  				</div>
  				<div class="form-group col-lg-12 col-xs-12">
    				<input type="checkbox" class="form-control" value="Monday" name="days[]" style="width:3%;"><label>Monday</label>
  				</div>
  				<div class="form-group col-lg-12 col-xs-12">
    				<input type="checkbox" class="form-control" value="Tuesday" name="days[]" style="width:3%;"><label>Tuesday</label>
  				</div>
  				<div class="form-group col-lg-12 col-xs-12">
    				<input type="checkbox" class="form-control" value="Wednesday" name="days[]" style="width:3%;"><label>Wednesday</label>
  				</div>
  				<div class="form-group col-lg-12 col-xs-12">
    				<input type="checkbox" class="form-control" value="Thursday" name="days[]" style="width:3%;"><label>Thursday</label>
  				</div>
  				<div class="form-group col-lg-12 col-xs-12">
    				<input type="checkbox" class="form-control" value="Friday" name="days[]" style="width:3%;"><label>Friday</label>
  				</div>
  				<div class="form-group col-lg-12 col-xs-12">
    				<input type="checkbox" class="form-control" value="Saturday" name="days[]" style="width:3%;"><label>Saturday</label>
  				</div>
  				<div class="form-group col-lg-12 col-xs-12">
    				<label>Enter number of fields </label><input type="text" class="form-control" id="count" name="cnt">
  				</div>
  				<div class="text-center col-lg-12 col-xs-12" style="padding-top: 15px;">
  				<button type="submit" class="btn btn-danger" name="submitter">Generate</button>
				</div>
			</div>
		</form>
		<div class="row">
			<?php

				if(isset($_POST['submitter'])){
				if(isset($_POST['days'])){
				$arrayday = $_POST['days'];

				echo "<div class=\"col-lg-12 col-xs-12 table-responsive animated fadeInUp\">";
					echo "<table class=\"table table-hover\">";
					echo "<thead class=\"bg-danger\">";

					echo "<th>Day</th>";
					for($i=1;$i<$_POST['cnt']+1;$i++){
					
					echo "<th>Event ".$i."</th>";
					
					}
					echo "</thead>";
					
					for($j=0;$j < sizeof($arrayday);$j++){
						echo "<tr>";
						echo "<td>".$arrayday[$j]."</td>";

						for($i=1;$i<$_POST['cnt']+1;$i++){
							
							$j+=1;
							echo "<th>Event ".$j.".".$i."</th>";
							
							$j-=1;
						}

						echo "</tr>";

						}
					echo "</table>";
					echo "</div>";
				}}

					

			?>
		</div>
		</div>
		</div>
		</div>	
	</div>
	</body>
</html>