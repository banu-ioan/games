<?php

class Fib
{
	public function of($in) 
	{
		if ($in <= 1) {
			return $in;
		} else {
			return $this->of( $in-1 ) + $this->of( $in-2 );
		}
		
	}
}