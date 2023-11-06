<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Tarea PHP
    Mario Romero Aguilar
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<h1>Cartas crecientes</h1>

	<p>Cada jugador saca 5 cartas. Se compara cada una con la anterior. Si es mayor, se suma su valor. Si es menor, se resta. Si es igual, se descarta. El valor de la primera carta se suma siempre.</p>

	<!--  ESCRIBA AQUI EL CÓDIGO HTML Y/O PHP NECESARIO -->
  <?php
    $cartasRojas = array();//Declaramos un array vacío
    array_push($cartasRojas,"cartas\c1.svg"); //Agregamos una imagen al array    
    array_push($cartasRojas,"cartas\c2.svg");
    array_push($cartasRojas,"cartas\c3.svg");
    array_push($cartasRojas,"cartas\c4.svg");
    array_push($cartasRojas,"cartas\c5.svg");
    array_push($cartasRojas,"cartas\c6.svg");   
    array_push($cartasRojas,"cartas\c7.svg");
    array_push($cartasRojas,"cartas\c8.svg");
    array_push($cartasRojas,"cartas\c9.svg");
    array_push($cartasRojas,"cartas\c10.svg");
    $cartasNegras = array();
    array_push($cartasNegras,"cartas\p1.svg");    
    array_push($cartasNegras,"cartas\p2.svg");
    array_push($cartasNegras,"cartas\p3.svg");
    array_push($cartasNegras,"cartas\p4.svg");
    array_push($cartasNegras,"cartas\p5.svg");
    array_push($cartasNegras,"cartas\p6.svg");   
    array_push($cartasNegras,"cartas\p7.svg");
    array_push($cartasNegras,"cartas\p8.svg");
    array_push($cartasNegras,"cartas\p9.svg");
    array_push($cartasNegras,"cartas\p10.svg");

    //for para recorrer el array y mostrar las cartas
    $puntosR = array();
    print"<h1>Cartas negras</h1>";
    for ($i = 0; $i < 5; $i++) {
      $numero_aleatorio = rand(0, 9);
      $puntosR[$i] = $numero_aleatorio + 1;
      echo "<img src='$cartasNegras[$numero_aleatorio]'width='200' height='300' alt='Error'>";
    }
    $puntosN = array();
    print"<h1>Cartas rojas</h1>"; 
    for ($i = 0; $i < 5; $i++) {
      $numero_aleatorio = rand(0, 9);
      $puntosN[$i] = $numero_aleatorio + 1;
      echo "<img src='$cartasRojas[$numero_aleatorio]'width='200' height='300' alt='Error'>";
    }
/*
○ Si el valor es mayor, se suma su valor.
○ Si es menor, se resta.
○ Si es igual, se descarta.
○ El valor de la primera carta se suma siempr
*/
    echo "<h1>Puntajes Negros</h1>";
    echo $puntosN[0]. " ". $puntosN[1]. " ".$puntosN[2]. " ". $puntosN[3]. " ". $puntosN[4]. "<br>";
    $resultado = 0;
    $resultado = $puntosN[0];
 for ($i = 0; $i < 4; $i++) {
    if ($puntosN[$i] > $puntosN[$i+1]) {
        $resultado = $resultado - $puntosN[$i+1];
      }elseif($puntosN[$i] < $puntosN[$i+1]) {
      $resultado = $resultado + $puntosN[$i+1];
      }
 }
 echo "<p>Resultado: $resultado</p>";
//Cartas Rojas
echo "<h1>Puntajes Rojas</h1>";
echo $puntosR[0]. " ". $puntosR[1]. " ".$puntosR[2]. " ". $puntosR[3]. " ". $puntosR[4]. "<br>";
$resultado = 0;
$resultado = $puntosR[0];
for ($i = 0; $i < 4; $i++) {
  if ($puntosR[$i] > $puntosR[$i+1]) {
    $resultado = $resultado - $puntosR[$i+1];
  } elseif ($puntosR[$i] < $puntosR[$i+1]) {
    $resultado = $resultado + $puntosR[$i+1];
  }
}
echo "<p>Resultado: $resultado</p>";

 
  ?>

  <footer>
    <p>Mario Romero Aguilar</p>
  </footer>

</body>
</html>