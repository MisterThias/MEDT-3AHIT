<?php
?>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-header">
					<h1>Herzlich Willkommen!</h1>
				</div>
				<div class="container">
					<?php 
						if(isset($_GET['loggedOut'])){
							echo "<p>Sie wurden erfolgreich ausgeloggt!</p>";
						}
						else if(isset($_GET['wrongInput'])){
							echo "<p>Es wurden falsche Daten eingegeben!</p>";
						}
						else if(isset($_GET['sessionerror'])){
							echo "<p>Sie sind in keiner Session oder es gibt Probleme mit der Session!</p>";
						}
						else{echo "<p>Anmelden</p>";}
					?>

					<form action="main.php" method="post">
				        <div class="form-group">
				          <input type="text" name="uname" class="form-control form-control-lg" placeholder="Enter your username">
				        </div>
				        <div class="form-group">
				          <input type="password" name="pword"  class="form-control form-control-lg" placeholder="Enter your password">
				        </div>
				        <button type="submit" name="submitbtn" class="btn btn-danger btn-lg pull-left">Login</button>
			      </form>
				</div>
			</div>
		</div>
	</div>
</body>