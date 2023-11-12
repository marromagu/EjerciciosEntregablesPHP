<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Tarea PHP
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Juego dados</h1>
    
  <!--  ESCRIBA AQUI EL CÓDIGO HTML Y/O PHP NECESARIO -->
  <?php

function tirarDados() {
    return [rand(1, 6), rand(1, 6)];
}

function calcularPuntuacion($dados) {
    return array_sum($dados);
}

function jugar() {
    $numJugadores = rand(2, 6);
    $jugadores = [];

    // Cada jugador tira dos dados
    for ($i = 1; $i <= $numJugadores; $i++) {
        $dados = tirarDados();
        $puntuacion = calcularPuntuacion($dados);

        $jugadores[$i] = [
            'dados' => $dados,
            'puntuacion' => $puntuacion,
        ];
    }

    // Ordenar jugadores por puntuación descendente
    usort($jugadores, function ($a, $b) {
        return $b['puntuacion'] - $a['puntuacion'];
    });

    // Determinar el ganador o empate
    $ganadores = [];
    $maxPuntuacion = $jugadores[0]['puntuacion'];

    foreach ($jugadores as $jugador) {
        if ($jugador['dados'][0] == $jugador['dados'][1] && $jugador['dados'][0] == 6) {
            // Gana automáticamente el jugador que saca doble seis
            $ganadores = [$jugador];
            break;
        }

        if ($jugador['puntuacion'] == $maxPuntuacion) {
            $ganadores[] = $jugador;
        } else {
            break; // El primer jugador con puntuación menor ya no puede ser ganador
        }
    }

    // Mostrar resultados
    echo "Resultados:\n";
    foreach ($jugadores as $indice => $jugador) {
        echo "Jugador $indice: Dados [{$jugador['dados'][0]}, {$jugador['dados'][1]}], Puntuación: {$jugador['puntuacion']}\n";
    }

    if (count($ganadores) == 1) {
        echo "El ganador es el Jugador " . array_keys($ganadores)[0] . "!\n";
    } else {
        echo "Hay un empate entre los siguientes jugadores:\n";
        foreach ($ganadores as $ganador) {
            echo "Jugador con Dados [{$ganador['dados'][0]}, {$ganador['dados'][1]}], Puntuación: {$ganador['puntuacion']}\n";
        }
    }
}

// Ejecutar el juego
jugar();

?>


  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>

</body>
</html>