<?php
    require_once('app/showContentFolder.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>PBT Documentor</title>
    <link rel="stylesheet" href="app/style.css" />
</head>
<body>

    <h1>pbtDocumentor</h1>
    <p> Générateur de la doc api de PHPBoost </p>
    <p class="parser">
        <a href="apigen_parser.php">Traiter les fichiers du framework</a>
    </p>
    <h3>Liste des fichiers à traiter</h3>
    <?php showContentFolder('framework-from-pbt'); ?>

</body>
</html>
