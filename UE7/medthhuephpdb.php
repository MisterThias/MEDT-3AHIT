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
<style>
.blacklink{text-decoration: none;
			color:black;

}
.blacklink:hover{
color:black;
	
}
</style>
<body>
<?php
//DB Settings 
$host='localhost';
$dbname='medt3';
$user='htluser';
$pwd='htluser';

//Establish connection
try{$db = new PDO ("mysql:host=$host; dbname=$dbname", $user, $pwd); }catch(PDOEXCEPTION $e){exit();}


//Select table with query
//$res=PDOStatement
if(isset($_GET['deleteID'])){

	$var=$_GET['deleteID'];
	$res=$db->query("DELETE FROM project WHERE id=$var" );

}

if (isset($_GET['editformID'])) {
		$editid = $_GET['editformID'];
		$sql=$db->prepare("SELECT name, description, createDate, id FROM project WHERE id = $editid");
		$sql->execute();
		$selectedproject=$sql->fetch(\PDO::FETCH_ASSOC);
	}


	if (isset($_GET['submitbtn'])) {

		$projectid=$_GET['id'];

		$sql = "UPDATE project SET name=:name, description=:description, createDate=:createDate WHERE id=$projectid";
			$stmt = $db->prepare($sql);
				$stmt->bindParam(':name', $_GET['name'], PDO::PARAM_STR); 
				$stmt->bindParam(':description', $_GET['description'], PDO::PARAM_STR);
				$stmt->bindParam(':createDate', $_GET['createDate'], PDO::PARAM_STR);
			$stmt->execute();
		header("Location:".$_SERVER['PHP_SELF']);   
	}

	if (isset($_GET['closebtn'])) {
		header("Location:".$_SERVER['PHP_SELF']); 
	}


$res=$db->query("SELECT * FROM project");
//array
$tmp=$res->fetchAll(PDO::FETCH_OBJ);
?>
<div class="container">
<table class="table table-hover table-bordered table-responsive table-inverse">
<thead><tr><th>Name</th>
<th>Description</th>
<th>CreationDate</th>
<th>Operationen</th></tr></thead>
<?php foreach($tmp as $row) :?>
<tr>
<td><?php echo $row->name;?></td>
<td><?php echo $row->description;?></td>
<td><?php echo $row->createDate;?></td>
<td>
<a href=<?php echo "medthhuephpdb.php?deleteID=".$row->id?>>
<span class="glyphicon glyphicon-trash"></span></a>
 <a href=<?php echo "medthhuephpdb.php?editformID=".$row->id."&modal=open"?> class="blacklink"><span class="glyphicon glyphicon-pencil"></span></a></td>
</tr>
</p>
<?php endforeach; ?>

</table>

<div id="myModal" class="modal fade myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      	<form>
        	<button type="submit" class="close" name="closebtn" value="close">&times;</button>
        </form>
        <h4 class="modal-title">
        	Projekt 
        	<?php  
        		print_r($selectedproject['name']);
        	?>
        	bearbeiten
        </h4>
      </div>
      <div class="modal-body">
        <form>
        	<div class="form-group">
        		<label class="control-label">Name</label>
        		<input type="text" class="form-control" name="name" value="<?php print_r($selectedproject['name']); ?>">
        	</div>
        	<div class="form-group">
        		<label class="control-label">Beschreibung</label>
        		<input type="text" class="form-control" name="description" value="<?php print_r($selectedproject['description']); ?>">
        	</div>
        	<div class="form-group">
        		<label class="control-label">Datum</label>
        		<input type="text" class="form-control" name="createDate" value="<?php print_r($selectedproject['createDate']); ?>">
        	</div>
        	<div class="form-group">
        		<input type="hidden" name="id" value="<?php print_r($selectedproject['id']); ?>">
        	</div>
        	
        	<div style="float:right;">
        	<button type="submit" class="btn btn-default" name="submitbtn" value="confirm">Aktualisieren</button>
        	<button type="submit" class="btn btn-default" name="closebtn" value="close">Abbrechen</button>
        	</div>
        	<div style="clear:both;"></div>
        </form>
      </div>
  </div>
</div>

<?php  

if (isset($_GET['modal'])) {
	echo "<script>$(\"#myModal\").modal('show')</script>";
}

?>

</div>
</body>
</html>