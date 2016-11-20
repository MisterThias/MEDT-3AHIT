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
		li:nth-of-type(even){
			background-color: #eeeeee;


		}
	</style>
	</header>
	
	<body>
	<div class="container-fluid">
		
		<div class="container">
		<div class="page-header">
			<h1 style="color:#b30000;">Beispiel 1<small> -array explode(...)</small></h1>
		</div> 
		<div class="container-fluid">
		<form class="form-inline" method ="POST" action=<?php echo $_SERVER['PHP_SELF']; ?>>
		<div class="row">
  			<div class="form-group col-lg-12 col-xs-12">
  			<label class=" col-lg-2 col-xs-12 label label-default" for Input >Ihre Eingabe</label>
    			<input type="text" class="form-control" id="Input" placeholder="Your Input" name="inp" style="width:100%;" class="col-lg-12 col-xs-12">
  			</div>
  			
  			
  			<div class="text-center col-lg-12 col-xs-12" style="padding-top: 15px;">
	  			<button type="submit" class="btn btn-danger" name="explodeBtn">Explode</button>
	  			<button type="submit" class="btn btn-danger" name="resetBtn">Reset</button>
			</div>
			</div>
		</form>
		<div class="container-fluid">
		<?php 

		if(isset($_POST['explodeBtn'])){
			$_explodedInput = explode(" ", $_POST['inp']);
			echo "<ul>";
			foreach($_explodedInput as $item){
			
				echo"<li class=\" list-unstyled\">$item</li>";

			}
			echo "</ul>";
			}
			
		?>
		</div>
		</div>
		</div>
		</div>	
	</div>
	</body>
</html>