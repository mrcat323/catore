<?php
	ini_set("error_reporting", 1);
	error_reporting(E_ALL);
	session_start();

	require_once 'lib/fabric.php';
	require_once 'lib/paginator.php';
	require_once 'lib/database.php';

	# Factory creates object, Router

	$router = Fabric::getClass("Router");

	$router->cat();

	if($router) return true;

	else return false;
