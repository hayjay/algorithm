<?php 

/**
 * 
 */
class ArrayAlgo
{
	
	public function replaceZeros()
	{
		$num_array = array(
		  array(
		    'num1' => 1,
		    'num2' => 2,
		    'zeros' => 3,
		    'num4' => 4,
		  ),
		  array(
		    'num1' => 5,
		    'num2' => 6,
		    'zeros' => 7,
		    'num4' => 8,
		  ),
		  array(
		    'num1' => 9,
		    'num2' => 10,
		    'zeros' => 0,
		    'num4' => 11,
		  ),
		  array(
		    'num1' => 12,
		    'num2' => 13,
		    'zeros' => 14,
		    'num4' => 15,
		  )
		);
		$zeros = array_column($num_array, zeros);
		$replaced = array_replace([0,1,2,3,4,5,6,7,8,9,1,10, zeros)
		var_dump($zeros);
	}

}

	$instance = new ArrayAlgo();
	$instance->replaceZeros();
 ?>