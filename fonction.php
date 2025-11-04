<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FONCTION</title>
</head>
<body>
    <?php
    function presentation($nom, $objectif){
        echo "<h1>Je suis " . $nom . " et je serai " . $objectif . ".</h1>";
    }
    presentation("Durack", "un développeur fullstack");
    presentation("Zinolas", "un designer");
    ?>
</body>
</html>