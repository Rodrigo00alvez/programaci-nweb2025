<?php 
if($_SERVER ['REQUEST_METHOD'] == "POST"){

$edad = intval($_POST ["edad"]);

if($edad >= 11 && $edad <=19){
    echo "tiene descuento";
}else{
    echo "no tiene descuento";
     }
}else{
    echo "error en la conexion";
}
?>
