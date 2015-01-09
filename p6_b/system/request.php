<?php
    class Request{
	
        static private $parametro=array();
        static private $pregunta=array();
        static private $cont;
        static private $accion;
        static private $total;
        
		
		
        static function retrieve(){	
            self::$pregunta =  explode('/',$_SERVER['REQUEST_URI']); 
            return self::$pregunta;    
        }
        static function getCount(){	
            $total = count(self::$pregunta);
            if($total == 3){
                echo "Controlador";
            }else{
               self::$cont = self::$pregunta[1];
               return self::$cont; 
            } 
        }

        static function getParams(){	
            $total = count(self::$pregunta);
            $j2=0;
            if($total >= 5){
                if($total % 3 == 0){
    	            for($j=3;$j < $total;$j++){ 
    	            	self::$parametro[$j2]= self::$pregunta[$j];
           				$j2++;  
    	            }
                    return self::$parametro;
            	}else{
            		echo "Los parametros introducidos son incorrectos";
            	}
            }else{
                echo "Correcto!!";
            }
        }

          static function getAction(){  
            $total = count(self::$pregunta);
            if($total >= 5){
                self::$accion = self::$pregunta[3];
                return self::$accion; 
            }else{
                echo "Accion";
            }  
        }
    }
?>