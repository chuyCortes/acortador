<?php
	class fun 
	{
		function make_seed()
		{
	  		list($usec, $sec) = explode(' ', microtime());
	  		return (float) $sec + ((float) $usec * 100000);
		}
		function microurl()
		{
			srand($this->make_seed());
			$t = round(microtime(),1,PHP_ROUND_HALF_UP);
			$str = ltrim($t, '0');
			$str = ltrim($str, '.');
			$val = $str;
			for ($i=0; $i < 4; $i++) { 
				$maymin = rand(0,1);
				$maymin == 1 ? $val .= chr(rand(65,90)).rand(0,9) : $val .= chr(rand(97,122)); 
			 } 
		return $val;
		}
	}
	

?>