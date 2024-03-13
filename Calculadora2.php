<!DOCTYPE html>
<html>
<head>
    <title>Tabuada</title>
</head>
<body>

<h2>Tabuada</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Digite um número: <input type="number" name="numero">
    <input type="submit" name="submit" value="Mostrar Tabuada">
</form>

<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o campo número foi preenchido
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];

        // Exibe a tabuada do número fornecido
        echo "<h3>Tabuada do $numero:</h3>";
        for ($i = 1; $i <= 10; $i++) {
            echo "$numero x $i = " . ($numero * $i) . "<br>";
        }
    } else {
        echo "Por favor, preencha o número.";
    }
}
?>

</body>
</html>
