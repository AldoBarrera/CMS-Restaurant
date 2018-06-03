<?php session_start();
require('config/config.php');
require("common/load-page.php");
$loadPage1 = new Page($_POST['page'],$_POST['module'] );
$_SESSION['page'] = $_POST['page'];
	$_SESSION['module'] =$_POST['module'];
include($loadPage1->loadPage());?>