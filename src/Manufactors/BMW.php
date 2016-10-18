<?php


namespace App\Manufactors;

use \App\Car as Car;

class BMW extends Car
{

	public function __construct()
	{
		parent::__construct();
		echo "am inited";
	}
	

}
