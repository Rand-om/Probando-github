<?php
    class Math
    {
    	public function __construct($num1, $num2){
    		echo pow($num1, $num2);
    	}
    }

    $Math = new Math(2,2);
?>