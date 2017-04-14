<?php
session_start();

if(isset($_SESSION['employee'])&&!empty($_SESSION['employee']))
{
  session_destroy();
header("Location:employee_login.php");
}

?>