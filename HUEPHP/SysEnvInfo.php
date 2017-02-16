<!DOCTYPE HTML5>

<html>
	<header>
	<meta charset="utf-8">
	<title>PHP: Server-Table</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	</header>
	
	<body>
	<div class="container-fluid">
		
		<div class="container">
		<div class="page-header">
			<h1 style="color:#b30000;">$_SERVER<small> im Überblick</small></h1>
		</div> 
		<div class="container-fluid">
		<div class="row">
		<div class="table-responsive">
			<table class="table table-bordered table-hover">
			<thead>
				<tr class= "danger">
				  <td class="col-xs-2"><p class="text-center ">Variable</p></td>
				  <td class=" col-xs-10"><p class="text-center">Wert</p></td>
				</tr>
			</thead>
			<tbody class = "table">
				<tr>
				  <td><p class="text-center">Skript-Pfad</p></td>
				  <td><p class="text-center"><?php echo $_SERVER['SCRIPT_FILENAME']; ?></p></td>
				</tr>
				<tr>
				  <td><p class="text-center">Server-Name/IP</p></td>
				  <td><p class="text-center"><?php echo $_SERVER['SERVER_NAME']."/".$_SERVER['SERVER_ADDR']; ?></p></td>
				</tr>
				<tr>
				  <td><p class="text-center">Protokoll</p></td>
				  <td><p class="text-center"><?php echo $_SERVER['SERVER_PROTOCOL']; ?></p></td>
				</tr>
				<tr>
				  <td><p class="text-center">Client-IP</p></td>
				  <td><p class="text-center"><?php echo $_SERVER['REMOTE_ADDR']; ?></p></td>
				</tr>
				<tr>
				  <td><p class="text-center">URL</p></td>
				  <td><p class="text-center"><?php echo $_SERVER['PHP_SELF']; ?></p></td>
				</tr>
				<tr>
				  <td><p class="text-center">Server-Info</p></td>
				  <td><p class="text-center"><?php echo $_SERVER['SERVER_SOFTWARE']; ?></p></td>
				</tr>
			</tbody>
				
			</table>

		</div>
		</div>	
		
		</div>
		</div>
		</div>	
	</div>
	</body>
</html>