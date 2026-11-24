<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Libre</title>
</head>
<body>
<?php

$matrizA = array();
$matrizB = array();
$matrizC = array();
$numA = 20;
$numB = 300;

echo "<h3>Matriz A</h3>";
echo "<table border='1' cellpadding='10' cellspacing='0'>";

for ($fila = 0; $fila < 3; $fila++) {
    echo "<tr>";
    for ($col = 0; $col < 3; $col++) {
        echo "<td>";
        $matrizA[$fila][$col] = $numA;
        $matrizC[$fila][$col] = $matrizA[$fila][$col];
        $numA += 5;
        echo $matrizA[$fila][$col] . " ";
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<h3>atriz B</h3>";
echo "<table border='1' cellpadding='10' cellspacing='0'>";

for ($fila = 0; $fila < 3; $fila++) {
    echo "<tr>";
    for ($col = 0; $col < 3; $col++) {
        echo "<td>";
        $matrizB[$fila][$col] = $numB;
        $matrizC[$fila][$col] = $matrizC[$fila][$col] + $matrizB[$fila][$col];
        $numB += 15;
        echo $matrizB[$fila][$col] . " ";
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<h3>Matriz C = A + B</h3>";
echo "<table border='1' cellpadding='10' cellspacing='0' style='background-color:#e8f8ff;'>";

for ($fila = 0; $fila < 3; $fila++) {
    echo "<tr>";
    for ($col = 0; $col < 3; $col++) {
        echo "<td><b>";
        echo $matrizC[$fila][$col] . " ";
        echo "</b></td>";
    }
    echo "</tr>";
}
echo "</table>";

?>

</body>
</html>