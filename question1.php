<?php
	/**
	 * 
	 */
	class Algorithm
	{
		
		public function findZeroAndReplace()
		{
			$array1 = [1,2,3,4];
			$array2 = [5,6,7,8];
			$array3 = [9,10,0,11];
			$array4 = [12,13,14,15];

		}

		public function maximumLength($your_array, $number)
		{
		    $counter = 0;  
		      
		    $res = 0;  
		  
		    for ($i = 0; $i < $number; $i++) 
		    { 
		        if ($your_array[$i] == 0) {
		        	// our aim is to look for where 1 is found, if 0 is found reset counter here
		            $counter = 0; 
		        }else{ 
		            // increase count 
		            $counter++; 
		            $res = max($res, $counter); 
		        } 
		    } 
		    return $res; 
			 
		}
	}

	// instantiate the class
	$class_instance = new Algorithm();
	$array_example  = array(0,0,1,1,0,0,0,1,0,0,1,1,1,0); 
	//dynamic number
	$number = sizeof($array_example) / sizeof($array_example[0]);
	//call the class method.
	$output = $class_instance->maximumLength($array_example, $number);
	var_dump("<p style='color:#0099cc' >1 OCCURED IN THE ARRAY ".$output." "." TIMES</p>");
?>

