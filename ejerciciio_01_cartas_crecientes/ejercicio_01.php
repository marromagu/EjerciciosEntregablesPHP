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
  $cartasDeCorazones = array(); //Declaramos un array vacío
  array_push($cartasDeCorazones, "cartas\c1.svg"); //Agregamos una imagen al array    
  array_push($cartasDeCorazones, "cartas\c2.svg");
  array_push($cartasDeCorazones, "cartas\c3.svg");
  array_push($cartasDeCorazones, "cartas\c4.svg");
  array_push($cartasDeCorazones, "cartas\c5.svg");
  array_push($cartasDeCorazones, "cartas\c6.svg");
  array_push($cartasDeCorazones, "cartas\c7.svg");
  array_push($cartasDeCorazones, "cartas\c8.svg");
  array_push($cartasDeCorazones, "cartas\c9.svg");
  array_push($cartasDeCorazones, "cartas\c10.svg");
  $cartasDePicas = array();
  array_push($cartasDePicas, "cartas\p1.svg");
  array_push($cartasDePicas, "cartas\p2.svg");
  array_push($cartasDePicas, "cartas\p3.svg");
  array_push($cartasDePicas, "cartas\p4.svg");
  array_push($cartasDePicas, "cartas\p5.svg");
  array_push($cartasDePicas, "cartas\p6.svg");
  array_push($cartasDePicas, "cartas\p7.svg");
  array_push($cartasDePicas, "cartas\p8.svg");
  array_push($cartasDePicas, "cartas\p9.svg");
  array_push($cartasDePicas, "cartas\p10.svg");

  //for para recorrer el array y mostrar las cartas
  $puntosDeCorazones = array();
  print "<h1>Cartas negras</h1>";
  for ($i = 0; $i < 5; $i++) {
    $numero_aleatorio = rand(0, 9);
    $puntosDeCorazones[$i] = $numero_aleatorio + 1;
    echo "<img src='$cartasDePicas[$numero_aleatorio]'width='200' height='300' alt='Error'>";
  }
  $puntosDePicas = array();
  print "<h1>Cartas rojas</h1>";
  for ($i = 0; $i < 5; $i++) {
    $numero_aleatorio = rand(0, 9);
    $puntosDePicas[$i] = $numero_aleatorio + 1;
    echo "<img src='$cartasDeCorazones[$numero_aleatorio]'width='200' height='300' alt='Error'>";
  }
  /*
○ Si el valor es mayor, se suma su valor.
○ Si es menor, se resta.
○ Si es igual, se descarta.
○ El valor de la primera carta se suma siempr
*/
  echo "<h1>Puntajes Negros</h1>";
  echo $puntosDePicas[0] . " " . $puntosDePicas[1] . " " . $puntosDePicas[2] . " " . $puntosDePicas[3] . " " . $puntosDePicas[4] . "<br>";
  $resultado = 0;
  $resultado = $puntosDePicas[0];
  for ($i = 0; $i < 4; $i++) {
    if ($puntosDePicas[$i] > $puntosDePicas[$i + 1]) {
      $resultado = $resultado - $puntosDePicas[$i + 1];
    } elseif ($puntosDePicas[$i] < $puntosDePicas[$i + 1]) {
      $resultado = $resultado + $puntosDePicas[$i + 1];
    }
  }
  echo "<p>Resultado: $resultado</p>";
  //Cartas Rojas
  echo "<h1>Puntajes Rojas</h1>";
  echo $puntosDeCorazones[0] . " " . $puntosDeCorazones[1] . " " . $puntosDeCorazones[2] . " " . $puntosDeCorazones[3] . " " . $puntosDeCorazones[4] . "<br>";
  $resultado = 0;
  $resultado = $puntosDeCorazones[0];
  for ($i = 0; $i < 4; $i++) {
    if ($puntosDeCorazones[$i] > $puntosDeCorazones[$i + 1]) {
      $resultado = $resultado - $puntosDeCorazones[$i + 1];
    } elseif ($puntosDeCorazones[$i] < $puntosDeCorazones[$i + 1]) {
      $resultado = $resultado + $puntosDeCorazones[$i + 1];
    }
  }
  echo "<p>Resultado: $resultado</p>";


  ?>

  <footer>
    <p>Mario Romero Aguilar</p>
  </footer>

</body>

</html>