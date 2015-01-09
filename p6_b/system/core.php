<?php

require "system/request.php";
	class  Core{
		static function init(){
			echo "Arrancado!!!";
			echo var_dump(Request::retrieve());
			
			echo"</br>";
            echo('Controller: ');
            print_r(Request::getCount()); 
            echo"</br>";
            echo('Parms: ');
            print_r(Request::getParams());
			echo"</br>";
            echo('Action: ');
            print_r(Request::getAction());
		}
	}
?>