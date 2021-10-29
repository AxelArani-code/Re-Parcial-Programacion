<?php
//saca el calculo 
class calculadora{
    public function calcularDatos($val1,$val2,$opcion){
        switch($opcion){
            case 'suma': 
            return $val1 + $val2;
                break;
            case 'resta': 
                return $val1 - $val2;
                break;
            case 'dividir': 
                return $val1 / $val2;
                 break;

            case 'multiplicar': 
                return $val1 * $val2;
                break;
                
            default;
                    break;

        }
    }
}

?>