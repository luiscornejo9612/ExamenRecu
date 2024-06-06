<?php
    session_start();

    if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
        header('Location: index.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultat</title>
</head>
<body>

    <h1>Hola, <?php echo htmlspecialchars($_SESSION["user"]); ?> </h1>    

    <?php
       

        if ($_SESSION["condicions"]) {
            echo "Has acceptat les condicions d'ús";
        } else {
            echo "No has acceptat les condicions d'ús";
        }
    ?>

    <br>
    <br>
    <a href="index.php">Tornar</a>
</body>
</html>
