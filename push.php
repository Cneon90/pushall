<?php 

	include_once("push.class");
	
	$tema=$_POST['tema'];
	$msg=$_POST['msg'];
	$www=$_POST['www'];
	
	$message = new Push;
    $message -> send($tema,$msg,$www);
    $message -> status(); //получить статус при необходимости 
   
    //echo("complite");
   
?>