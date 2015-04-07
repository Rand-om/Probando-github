<?php
    class Mate
    {
    	public static function potencia($num1, $num2){
    		echo pow($num1, $num2);
    	}

    	public static function raiz($num){
    		echo sqrt($num);
    	}
    }

    Mate::raiz(3);

?>