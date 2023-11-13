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
    <h1>Juego dados</h1>

    <!--  ESCRIBA AQUI EL CÓDIGO HTML Y/O PHP NECESARIO -->
    <?php

    function tirarDados()
    {

        $dado1 = rand(1, 6);
        $dado2 = rand(1,6);

        return [$dado1, $dado2];
    }

    function calcularPuntuacion($dados)
    {
        return array_sum($dados);
    }

    function jugar()
    {
        $dado = array();
        array_push($dado, "dados\d0.svg");
        array_push($dado, "dados\d1.svg"); //Agregamos una imagen al array
        array_push($dado, "dados\d2.svg");
        array_push($dado, "dados\d3.svg");
        array_push($dado, "dados\d4.svg");
        array_push($dado, "dados\d5.svg");
        array_push($dado, "dados\d6.svg");
        array_push($dado, "dados\d6.svg");
        $numJugadores = 6;
        $jugadores = [];

        // Cada jugador tira dos dados
        for ($i = 1; $i <= $numJugadores; $i++) {
            $dados = tirarDados();
            $puntuacion = calcularPuntuacion($dados);

            $jugadores[$i] = [
                'dados' => $dados,
                'puntuacion' => $puntuacion,
                'dado1' => $dado[$dados[0]],
                'dado2' => $dado[$dados[1]],
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
        echo "<h1>Resultados:</h2>";
        foreach ($jugadores as $indice => $jugador) {
            echo "<p>Jugador $indice: Dados [{$jugador['dados'][0]}, {$jugador['dados'][1]}], Puntuación: {$jugador['puntuacion']}</p>";
            echo "<img src='{$jugador['dado1']}'width='100' height='200' alt='Error'>";
            echo "<img src='{$jugador['dado2']}'width='100' height='200' alt='Error'>";
        }

        if (count($ganadores) == 1) {
            echo "<p>El ganador es el Jugador " . array_keys($ganadores)[0] . "!</p>";
        } else {
            echo "<p>Hay un empate entre los siguientes jugadores:</p>";
            foreach ($ganadores as $ganador) {
                echo "<p>Jugador con Dados [{$ganador['dados'][0]}, {$ganador['dados'][1]}], Puntuación: {$ganador['puntuacion']}</p>";
            }
        }
    }

    // Ejecutar el juego
    jugar();

    ?>


    <footer>
        <p>Mario Romero</p>
    </footer>

</body>

</html>