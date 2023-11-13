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
  <h1>Obtener Productos</h1>

  <!--  ESCRIBA AQUI EL CÓDIGO HTML Y/O PHP NECESARIO -->
  <?php
$datos = array(
    "1020TV" => array("Nombre" => "Televisor", "Precio" => "750€", "Stock" => 30, "Marca" => "LG", "UltimaActualizacion" => "13/10/2022"),
    "1518CM" => array("Nombre" => "Cámara", "Precio" => "325€", "Stock" => 22, "Marca" => "Nikon", "UltimaActualizacion" => "10/10/2022"),
    "2050CN" => array("Nombre" => "Consola", "Precio" => "299€", "Stock" => 15, "Marca" => "Nintendo", "UltimaActualizacion" => "23/09/2022"),
    "3065PT" => array("Nombre" => "Portátil", "Precio" => "595€", "Stock" => 7, "Marca" => "Lenovo", "UltimaActualizacion" => "31/08/2022"),
    "3560AA" => array("Nombre" => "Aire Acondicionado", "Precio" => "420€", "Stock" => 18, "Marca" => "Daikin", "UltimaActualizacion" => "09/09/2022"),
    "4090RC" => array("Nombre" => "Robot de Cocina", "Precio" => "380€", "Stock" => 35, "Marca" => "Moulinex", "UltimaActualizacion" => "26/09/2022"),
    "5020MC" => array("Nombre" => "Microondas", "Precio" => "175€", "Stock" => 8, "Marca" => "Candy", "UltimaActualizacion" => "19/08/2022"),
    "5575RI" => array("Nombre" => "Ratón inalámbrico", "Precio" => "15€", "Stock" => 35, "Marca" => "Logitec", "UltimaActualizacion" => "29/09/2022"),
    "6070AV" => array("Nombre" => "Altavoces", "Precio" => "30€", "Stock" => 4, "Marca" => "Sony", "UltimaActualizacion" => "03/10/2022"),
    "7025MV" => array("Nombre" => "Móvil", "Precio" => "500€", "Stock" => 10, "Marca" => "Samsung", "UltimaActualizacion" => "16/10/2022")
);

function obtenerDatos($datos, $codigos = [], $infoAdicional = null) {
    $result = [];

    foreach ($codigos as $codigo) {
        if (isset($datos[$codigo])) {
            if ($infoAdicional === null) {
                $result[$codigo] = $datos[$codigo]["Nombre"];
            } elseif ($infoAdicional == "precio" && isset($datos[$codigo]["Precio"])) {
                $result[$codigo] = array("Nombre" => $datos[$codigo]["Nombre"], "Precio" => $datos[$codigo]["Precio"]);
            }
        }
    }

    return $result;
}

// Pruebas
echo "<p>Con un parámetro:</p>";
foreach (obtenerDatos($datos) as $codigo => $nombre) {
    echo "Código: $codigo, Nombre: $nombre\n";
}

echo "<p>Con dos parámetros:</p>";
foreach (obtenerDatos($datos, ["1020TV", "2050CN", "7025MV"]) as $codigo => $nombre) {
    echo "Código: $codigo, Nombre: $nombre\n";
}

echo "<p>Con tres parámetros:</p>";
foreach (obtenerDatos($datos, ["1518CM", "3065PT", "3560AA"], "precio") as $codigo => $info) {
    echo "Código: $codigo, Nombre: {$info['Nombre']}, Precio: {$info['Precio']}\n";
}
?>


  <footer>
    <p>Mario Romero Aguilar</p>
  </footer>
  <?php 
    
  ?>
</body>

</html>