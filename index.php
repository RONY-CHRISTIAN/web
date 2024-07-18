<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Dados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Juego de Dados</h1>
        <form action="operaciones.php" method="post">
            <label for="numDice">Número de Dados:</label>
            <input type="number" id="numDice" name="numDice" min="1" max="10" value="<?= isset($_POST['numDice']) ? htmlspecialchars($_POST['numDice']) : 1 ?>">
            <br><br>
            <button type="submit" name="reset">Reiniciar</button>
            <button type="submit" name="roll">Tirar Dados</button>
        </form>
        <?php if (!empty($_SESSION['dice'])): ?>
            <div class="dice-container">
                <?php foreach ($_SESSION['dice'] as $die): ?>
                    <div class="die"><?= htmlspecialchars($die) ?></div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
