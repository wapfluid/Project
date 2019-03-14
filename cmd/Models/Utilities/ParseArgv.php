<?php
namespace App\Models\Utilities;

class Connection
{

    private $myName;

   /* public function __construct()
    {
        echo "In constructor:  " . __DIR__ . " " . __CLASS__ . "\n";
        $this->myName = "Utilities";
    } */

    public function ParseArguments($argv)
    {
			
        // Script example.php
		$shortopts  = "";
		$shortopts .= "l:";  // Required value
		$shortopts .= "T:";  // Required value
		$shortopts .= "v";  // Optional value

		$longopts  = array(
			"names::",     // Required value
			"grades::",    // Optional value
		);
		$options = getopt($shortopts, $longopts);
		//echo "<pre>"; print_r($options); echo "</pre>"; die(__FILE__ ." on this line ". __LINE__);
		
		/* foreach($options as $arg){
			if(empty($arg)){
				echo "FLAGS";
			}
		} */


		if (array_key_exists("v",$options)){
			//$result0[] = 'SINGLES';
			if(!empty($options['v'])){
				echo "SINGLES".PHP_EOL;
				$result['FLAGS']['v'] = explode(',',$options['v']);
			}else{
				$result ="FLAGS".PHP_EOL;
				$result .="v".PHP_EOL;
			}
			print_r($result);
		}
		
		if (array_key_exists("T",$options)){
			if(!empty($options['T'])){
				echo "SINGLES".PHP_EOL;
				$result0['T'] = explode(',',$options['T']);
				print_r($result0);
			}else{
				$result0 = "FLAGS".PHP_EOL;
				$result0 .="T".PHP_EOL;
				print_r($result0);
			}
		}
		if (array_key_exists("l",$options)){
			if(!empty($options['l'])){
				 echo "SINGLES".PHP_EOL;
				$result1['l'] = explode(',',$options['l']);
			    print_r($result1);
			}else{
				$result1 = "FLAGS".PHP_EOL;
				$result1 .="l".PHP_EOL;
				print_r($result1);
			}
		}

		if (array_key_exists("names",$options)){
		  if(!empty($options['names'])){
			  echo "DOUBLES".PHP_EOL;
				$result2['names'] = explode(',',$options['names']);
				print_r($result2);
			}else{
				$result2 = "FLAGS".PHP_EOL;
				$result2 .="names".PHP_EOL;
				print_r($result2);
			}
		}
		if (array_key_exists("grades",$options)){
			if(!empty($options['grades'])){
				echo "DOUBLES".PHP_EOL;
				$result3['grades'] = explode(',',$options['grades']);
				print_r($result3);
			}else{
				$result3 = "FLAGS".PHP_EOL;
				$result3 .="names".PHP_EOL;
				print_r($result3);
			}
		}
		die();
    }
}
