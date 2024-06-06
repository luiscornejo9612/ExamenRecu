<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>
<body>
    <h1>Consultar usuario</h1>

    

    <form action="validar.php" method="post">
        <div>
            <label for="usuari">Usuari</label>
            <input type="text" id="usuari" name="usuari" required>
        </div>
        <div>
            <label for="edat">Edat</label>
            <input type="number" id="edat" name="edat" required>
        </div>
        <br>
        <div>
            <label for="condicions">Accepto les condicions</label>
            <input type="checkbox" id="condicions" name="condicions" required>
        </div>
        <br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        if (isset($_GET['error'])) {
            echo '<p style="color:red;">' . htmlspecialchars($_GET['error']) . '</p>';
        }
    ?>
</body>
</html>
