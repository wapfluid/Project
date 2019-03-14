<?php
namespace App\Model\network;

class Connection
{
	public function __construct()
	{
		echo "In constructor:  " . __DIR__ . " " . __CLASS__ . "\n";
	}

	public function connect()
	{
		echo "Network connect!\n";
	}
}
