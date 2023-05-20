<?php
 // declarar las variables + identificador + asignacion o tipo de dato 
 // operadores aritmeticos + - * / ! = 
 $variable = 45;
 $Mensaje = "El valor de la variable";
 $Numero1 = 10; $Numero2 = 4; $Numero3 = 89;
 $Suma = $Numero1 + $Numero2 + $Numero3;
 $Resta = $Numero1 - $Numero2 - $Numero3;
 $Multiplicacion = $Numero1 * $Numero2 * $Numero3;
 $divi = $Numero1 / $Numero2 / $Numero3;
 $Radio = 2;
 define('Pi','3.1416');
 $Decremento = 10;
 $Incremento = 10;
 $hora = date('H:mm');
 echo "<br>";
 echo "La Suma de ".$Numero1." + ".$Numero2." + ".$Numero3." es: ".$Suma."<br>";
 echo "La Resta de ".$Numero1." - ".$Numero2." - ".$Numero3." es: ".$Resta."<br>";
 echo "La Multiplicacion de ".$Numero1." * ".$Numero2." * ".$Numero3." es: ".$Multiplicacion."<br>";
 echo "La Divicion de ".$Numero1." / ".$Numero2." / ".$Numero3." es: ".$divi."<br>";
 echo $hora;
 echo "<br>";
 echo var_dump(($Suma));
 echo "<br>";
 echo var_dump($Mensaje);
 echo "<br>";
 // area de un circulo
$Ejemplo = Pi * $Radio * $Radio;
$Mensaje2 = "El area del circulo con el radio de: ".$Radio." por el valor de Pi que es: ".Pi." el resultado es: ".$Ejemplo; 
echo $Mensaje2."<br>";
echo var_dump(constant('Pi'))."<br>";
echo "El valor del decremento es :".--$Decremento."<br>";
echo "El valor del incremento es :".++$Incremento."<br>";
?>