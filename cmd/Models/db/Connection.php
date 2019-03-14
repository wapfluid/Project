<?php
namespace App\Models\db;

class Connection
{
	public function __construct()
	{
		echo "In constructor:  " . __DIR__ . " " . __CLASS__ . "\n";
	}
	
	public function connect()
	{
		echo "db connect!\n";
	}
}
