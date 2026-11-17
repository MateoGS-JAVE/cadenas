<?php
require_once("cadenas.php");
$texto = isset($_POST['texto']) ? $_POST['texto'] : "Reconocer";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo de Cadenas en PHP</title>
</head>
<body>
    <h2>Prueba de funciones de cadenas</h2>
    <form method="POST" action="">
        <label for="texto">Introduce una palabra o frase:</label><br><br>
        <input type="text" id="texto" name="texto" value="<?php echo htmlspecialchars($texto); ?>" required>
        <button type="submit">Ejecutar</button>
    </form>
    <hr>
    <h3>Resultados para: "<?php echo htmlspecialchars($texto); ?>"</h3>
    <?php
    echo "Cantidad de caracteres: " . contarCaracteres($texto) . "<br>";
    echo "Mayúsculas: " . convertirMayusculas($texto) . "<br>";
    echo "Minúsculas: " . convertirMinusculas($texto) . "<br>";
    echo "Invertida: " . invertirCadena($texto) . "<br>";
    $esPali = esPalindromo($texto) ? "Sí" : "No";
    echo "¿Es palíndromo?: " . $esPali . "<br>";
    echo "Cantidad de vocales: " . contarVocales($texto) . "<br>";
    ?>
</body>
</html>