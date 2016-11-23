<!DOCTYPE HTML5>

<html>
	<header>
	<meta charset="utf-8">
	<title>PHP: Input-Tests</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</header>
	<body><div class="container">
	<div class="page-header">
		<h1 style="color:#b30000;">Form<small> Input-Types</small></h1>
	</div>
		<div class="container well">

			<form action=<?php echo $_SERVER['PHP_SELF']; ?> method="POST">
			<p><label><input type="radio" name="tester" value="1">1</label></p>
			<p><label><input type="radio" name="tester" value="2">2</label></p>
			<p><label><input type="radio" name="tester" value="3">3</label></p>
			<button type="submit" class="btn btn-danger" name="submitter">Log in</button>
			</form>

			<?php
				if(isset($_POST['tester'])){

				echo "Ihre Auswahl: ".$_POST['tester'];

				}


			?>





		</div>
		<div class="container well">

			<form action=<?php echo $_SERVER['PHP_SELF']; ?> method="POST">
			<p><label><input type="checkbox" name="agb" value="Stimme zu">I agree</label></p>
		
			<button type="submit" class="btn btn-danger" name="submitter2">Send</button>
			</form>

			<?php
			if(isset($_POST['submitter2'])){
				
				if(isset($_POST['agb'])){
				
				echo "Answer: ".$_POST['agb'];}

				}


			?>





		</div>
		<div class="container well">

			<form action=<?php echo $_SERVER['PHP_SELF']; ?> method="POST">
			<p><label><input type="checkbox" name="town[]" value="Vienna">Vienna</label></p>
			<p><label><input type="checkbox" name="town[]" value="Graz">Graz</label></p>
			<p><label><input type="checkbox" name="town[]" value="Linz">Linz</label></p>
			<button type="submit" class="btn btn-danger" name="submitter3">Send</button>
			</form>

			<?php
			if(isset($_POST['submitter3'])){
				echo "Ihre Auswahl";
				if(isset($_POST['town'])){
				foreach ($_POST['town'] as $item) {
					echo " $item <br>";
				}}
						
				
			}

			?>
			</div>
			<div class="container well">

			<form action=<?php echo $_SERVER['PHP_SELF']; ?> method="POST">
			<select name="auto[]" size="5" multiple>
				<option>Mercedes</option>
				<option>Audi</option>
				<option>Seat</option>
				<option>BMW</option>
				<option>Renault</option>
				<option>VW</option>
			</select>
			<button type="submit" class="btn btn-danger" name="submitter4">Send</button>
			</form>

			<?php
			if(isset($_POST['submitter4'])){
				echo "Ihre Auswahl: <br>";
				if(isset($_POST['auto'])){
				foreach ($_POST['auto'] as $item) {
					echo " $item <br>";
				}}
						
				
			}

			?>




		
</div>	
			<div class="container well">
			<form action=<?php echo $_SERVER['PHP_SELF']; ?> method="POST">
				 <p> Select your favorite color: </p>
				  <input type="color" name="favcolor">
				  <button type="submit" class="btn btn-danger" name="submitter5">Send</button>
			</form>
			<?php
			if(isset($_POST['submitter5'])){
				echo "Ihre Auswahl: <br>";
				if(isset($_POST['favcolor'])){
				echo $_POST['favcolor'];
				}}
						
				
				
			

			?>
			</div>
			<div class="container well">
			<form action=<?php echo $_SERVER['PHP_SELF']; ?> method="POST">
				 <input list="browsers" name="bl">

					<datalist id="browsers">
					  <option value="Internet Explorer">
					  <option value="Firefox">
					  <option value="Chrome">
					  <option value="Opera">
					  <option value="Safari">
					</datalist>
					<button type="submit" class="btn btn-danger" name="submitter6">Send</button>

			</form>
			<?php
			if(isset($_POST['submitter6'])){
				echo "Ihre Auswahl: <br>";
				if(isset($_POST['bl'])){
				echo $_POST['bl'];
				}}
						
				
				
			

			?>
			</div>

			</div>
	</body>
</html>