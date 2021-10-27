<?php
    function opraciones($n1,$n2,$operacion){
        $resultado =0;
        if($operacion == "Sumar"){
            $resultado = $n1+$n2;
        }else if($operacion == "Restar"){
            $resultado = $n1-$n2;
        }else if($operacion == "Multiplicar"){
            $resultado = $n1*$n2;
        }

        return $resultado;
    }
    function mostrarTextError(){
        echo"<strong> Se ha producido un error </strong> ";
    }
    $r= opraciones(5,7,"Multiplicar");
    echo$r."<br>";
    echo opraciones(15,8,"Restar");
?>