<?php
	$title = "Management";
	include './Controller/CoffeeController.php';
	$coffeeController = new CoffeeController();
	
	$content = $coffeeController->CreateOverviewTable();
	
	//Prep to delete object
	if(isset($_GET["delete"]))
	{ 
		$coffeeController->DeleteCoffee($_GET["delete"]);
	}
	
	include './Template.php';
?> 