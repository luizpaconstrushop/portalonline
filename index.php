<?php
include("includes/header.php");

if(isset($logado)){
	include_once("views/home.php");
}else{
	include("views/login.php");
}
?>

