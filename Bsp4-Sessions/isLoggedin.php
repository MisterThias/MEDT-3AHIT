<?php

if(isset($_GET['logout']))
{
  session_destroy();
  session_unset();
  header("Location: index.php?loggedOut");
}
if(isset($_SESSION['uname'])==false)
{
  header("Location: index.php?sessionerror");
}
?>