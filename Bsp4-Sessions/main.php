<?php 
include('session.php');
if(isset($_POST['submitbtn']))
{
	$pword = $_POST['pword'];
	$uname = $_POST['uname'];
	if($uname=="krems" && $pword=="krems")
	{		
		$_SESSION['uname'] = $uname;
		echo $_SESSION['uname'];
		header("Location: project-list.php");
	}
	else
	{
		header("Location: index.php?wrongInput");
	}
}
?>
