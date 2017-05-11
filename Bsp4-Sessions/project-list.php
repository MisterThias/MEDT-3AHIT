<?php
include 'session.php';
require('isLoggedin.php');
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
<style>
.blacklink{text-decoration: none;
			color:black;

}
.blacklink:hover{
color:black;
	
}
</style>
<body>
<div class="container">
<div class="page-header">
            <h1>Trackstar Light - Herzlich Willkommen <?php echo $_SESSION['uname'];?></h1>
            
 </div>
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

	$feedbackclass="bg-danger";
	$feedbackdelete="nicht";

	if($res->rowCount()){

		$feedbackclass="bg-success";
		$feedbackdelete="";
	}
echo "<p class=\"".$feedbackclass."\">Das Projekt wurde $feedbackdelete gelöscht!</p>";
}

if (isset($_GET['editformID'])) {
		$editid = $_GET['editformID'];
		$sql=$db->query("SELECT name, description, createDate, id FROM project WHERE id = $editid");
		$selectedproject=$sql->fetch(\PDO::FETCH_ASSOC);
	}


	if (isset($_GET['submitbtn'])) {
		$projectid=$_GET['id'];
		$projectname=$_GET['name'];
		$projectdescription=$_GET['description'];
		$projectcreateDate=$_GET['createDate'];
		$sql=$db->query("UPDATE project SET name='".$projectname."', description='".$projectdescription."', createDate='".$projectcreateDate."' WHERE id=$projectid"); 
			
		header("Location:".$_SERVER['PHP_SELF']."?editsucc=true");   
	}

    if(isset($_GET['submitbtnnew'])){
        $projectdesc=$_GET['description'];
        $projectname=$_GET['name'];

        $db->query("INSERT INTO project (name, description, createDate) VALUES('$projectname', '$projectdesc', now())");
    }

	if (isset($_GET['closebtn'])) {
		header("Location:".$_SERVER['PHP_SELF']); 
	}


$res=$db->query("SELECT * FROM project");
//array
$tmp=$res->fetchAll(PDO::FETCH_OBJ);
?>




<table class="table table-hover table-bordered table-responsive table-inverse">
<thead><tr><th>Name</th>
<th>Description</th>
<th>CreationDate</th>
<th>Operationen</th></tr></thead>
<?php foreach($tmp as $row) :?>
<tr>
<td><?php echo htmlspecialchars($row->name);?></td>
<td><?php echo $row->description;?></td>
<td><?php echo $row->createDate;?></td>
<td>
<a href=<?php echo "project-list.php?deleteID=".$row->id?>>
<span class="glyphicon glyphicon-trash"></span></a>
 <a href=<?php echo "project-list.php?editformID=".$row->id."&modal=open"?> class="blacklink"><span class="glyphicon glyphicon-pencil"></span></a></td>
</tr>
</p>
<?php endforeach; ?>

</table>
<a href=<?php echo "project-list.php?insertModal=1&modal=open"?> style="color:white;"><button class="btn btn-success">New Project</button></a>
<a href=<?php echo "project-list.php?logout"?> style="color:white;"><button class="btn btn-default">Log out</button></a>
<?php 
if(isset($_GET['editformID'])){
?>
<div id="myModal" class="modal fade myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      	<form>
        	<button type="submit" class="close" name="closebtn" value="close">&times;</button>
        </form>
        <h4 class="modal-title">
        	
        	<?php  
        		print_r ("Projekt ".$selectedproject['name']." bearbeiten");
        	?>
        	
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
<?php }
if(isset($_GET['insertModal'])){
?>
<div id="myModal" class="modal fade myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <form>
            <button type="submit" class="close" name="closebtn" value="close">&times;</button>
        </form>
        <h4 class="modal-title">
            
            <?php  
                print_r ("Neues Projekt");
            ?>
            
        </h4>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
                <label class="control-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Project name" required>
            </div>
            <div class="form-group">
                <label class="control-label">Beschreibung</label>
                <input type="text" class="form-control" name="description"  placeholder="Project description" required>
            </div>
            
            <div style="float:right;">
            <button type="submit" class="btn btn-default" name="submitbtnnew" value="confirm">Projekt anlegen</button>
            <button type="submit" class="btn btn-default" name="closebtn" value="close">Abbrechen</button>
            </div>
            <div style="clear:both;"></div>
        </form>
      </div>
  </div>
</div>

<?php  
}
if (isset($_GET['modal'])) {
	echo "<script>$(\"#myModal\").modal('show')</script>";
}


?>

</div>
</body>
</html>