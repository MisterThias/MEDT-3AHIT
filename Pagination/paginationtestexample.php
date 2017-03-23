<html>
	<header>
		<meta charset="utf-8">
		<title>Test Übung</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<style type="text/css">
		.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
	    background-color: #e6f5ff;
	    color: #4d4d4d;
		}
		</style>
	</header>
	<body>
	<div class="container">
	<?php 
       		$host='localhost';
       		$dbname='classicmodels';
       		$user='htluser';
       		$pwd='htluser';

       		try{
       		$db = new PDO ("mysql:host=$host;dbname=$dbname", $user, $pwd);
       		}
       		catch( PDOException $Exception){
       		echo "<h1>Error</h1>";
       		}

       		if(isset($_GET['offsetter'])){
       		
       		$offsetGet=$_GET['offsetter'];
       		
       	
       		}else{
       		$offsetGet=0;
       		}
       		$offsetpage=$offsetGet*20;
       		$res=$db->query ("SELECT * FROM customers LIMIT $offsetpage,20");
       		$tmp = $res->fetchAll(PDO::FETCH_ASSOC);

       		echo "<table class=\"table table-hover table-responsive table-bordered\">";
       		echo "<thead>";
       		echo "<th>Number</th>";
       		echo "<th>Name</th>";
       		echo "<th>Kontakt Nachname</th>";
       		echo "<th>Kontakt Vorname</th>";
       		echo "<th>Telefon</th>";
       		echo "<th>Adresse 1</th>";
       		echo "<th>Adresse 2</th>";
       		echo "<th>Stadt</th>";
       		echo "<th>Bundesland</th>";
       		echo "<th>Postleitzahl</th>";
       		echo "<th>Land</th>";
       		echo "<th>Sales Rep Employee Number</th>";
       		echo "<th>Kredit Limit</th>";
       		echo "</thead>";
       		foreach ($tmp as $row):
	?>
	<tr>
	<td><?php echo $row['customerNumber'];?></td>
	<td><?php echo $row['customerName'];?></td>
	<td><?php echo $row['contactLastName'];?></td>
	<td><?php echo $row['contactFirstName'];?></td>
	<td><?php echo $row['phone'];?></td>
	<td><?php echo $row['addressLine1'];?></td>
	<td><?php echo $row['addressLine2'];?></td>
	<td><?php echo $row['city'];?></td>
	<td><?php echo $row['state'];?></td>
	<td><?php echo $row['postalCode'];?></td>
	<td><?php echo $row['country'];?></td>
	<td><?php echo $row['salesRepEmployeeNumber'];?></td>
	<td><?php echo $row['creditLimit'];?></td>
	</tr>
<?php 
endforeach;
?>

</table>

<?php
$res=$db->query ("SELECT * FROM customers");
$tmp = $res->fetchAll(PDO::FETCH_ASSOC);

$countelements = count($tmp);
$maxpages=round($countelements/20);
$nextpage=$offsetGet+1;
$lastpage=$offsetGet-1;
echo "<nav class=\"...\">";
echo "<ul class=\"pagination\">";
echo "<li><span class=\"glyphicon glyphicon-backward\"><a href=\"paginationtestexample.php?offsetter=0\"></a></span></li>";
if($offsetGet>0){
echo "<li><span class=\"glyphicon glyphicon-menu-left\"><a href=\"paginationtestexample.php?offsetter=$lastpage\"></a></span></li>";
}

for($i=0;$i<=$maxpages;$i++){
	if($i==$offsetGet-1 || $i==$offsetGet+1 || $i==$offsetGet){
	$realNumber=$i+1;
	echo "<li><a href=\"paginationtestexample.php?offsetter=$i\">$realNumber</a></li>";
	}
}
if($offsetGet<$maxpages){
	echo "<li><span class=\"glyphicon glyphicon-menu-right\"><a href=\"paginationtestexample.php?offsetter=$nextpage\"></a></span></li>";
}

echo "<li><span class=\"glyphicon glyphicon-forward\"><a href=\"paginationtestexample.php?offsetter=6\"></a></span></li>";
echo "</ul>";
echo "</nav>";
?>
</div>
	</body>
</html>
