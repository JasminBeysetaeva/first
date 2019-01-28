<?php
	require 'Controller/CoffeeController.php';
	$coffeeController = new CoffeeController();

	if (isset($_POST['types']))
	 {
		# code...
		$coffeeTables = $coffeeController->CreateCoffeeTables($_POST['types']);
	}
	else
	{
		$coffeeTables = $coffeeController->CreateCoffeeTables('%');
	}
 
	$title = 'Cofffee overview';
	$content = $coffeeController->CreateCoffeeDropdownList(). $coffeeTables;

	include 'Template.php';
?>