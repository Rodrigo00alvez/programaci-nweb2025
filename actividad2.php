<?php
if($_SERVER ["REQUEST_METHOD"] == "POST"){
$cantidadEnPesos = floatval($_POST["pesos"]);
$moneda=$_POST["pesos"];
$valorDolar = 40;
$valorEuro = 43;
$valorReal = 8;
switch($moneda){
    case "dolares":
        $cantidadTotalDolares = $cantidadEnPesos / $valorDolar;
        echo "tenes $cantidadTotalDolares";
        break;
    case "euros":
        $cantidadTotalEuros = $cantidadEnPesos / $valorEuro;
        echo "tenes $cantidadTotalEuros";
        break;
    case "real":
        $cantidadTotalReal = $cantidadEnPesos / $valorReal;
        echo "tenes $cantidadTotalReal";
        break;

}

}else{
    echo"error en la conexion";
}

?>