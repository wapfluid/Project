<?php
namespace App\Models\Utilities;

class Connection
{

    private $myName;

    public function __construct()
    {
        echo "In constructor:  " . __DIR__ . " " . __CLASS__ . "\n";
        $this->myName = "Utilities";
    }

    public function connect()
    {
        echo "Be Utilities! Connect and feel the love!\n";
    }
}
