<?php
    require_once('app/showContentFolder.php');
    require_once('app/unloadFolder.php');
    require_once('app/apiParser.php');

    // Set enough time to execute the whole script
    set_time_limit(300);
    // Unload the framework folder
    unloadFolder('framework');
    $resources = 'framework/resources';
    if(file_exists($resources))
        rmdir($resources);

    // Parse all files from PBT
    echo exec('e:\xampp-7124\htdocs\workspace-71\phpboost\pbtDoc\pbtDocumentor\app\doc-pbt.bat');
    apiParser('framework');

    // Delete temp & obsolete files
    unlink('temp.temp');
    $elem = 'framework/elementlist.js';
    $combi = 'framework/resources/combined.js';
    if(file_exists($elem))
        unlink($elem);

    if(file_exists($combi))
        unlink($combi);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>PBT Documentor</title>
    <link rel="stylesheet" href="app/style.css" />
</head>
<body>
    <h1>Liste des fichiers à transferer dans le module Api PHPBoost</h1>
    <p>
        <ol>
            <li>Supprimer le dossier <code>framework</code> du module <code>api</code></li>
            <li>Copier le dossier <code>framework</code> de pbtDocumentor</li>
            <li>Le coller dans le module <code>api</code></li>
        </ol>
    </p>
    <audio controls autoplay loop>
        <source src="app/por101.ogg" type="audio/ogg">
        <source src="app/por101.mp3" type="audio/mpeg">
    </audio>
    <p class="back">
        <a href="./">Retour</a>
    </p>
    <?php
        // Display results
        showContentFolder('framework');
    ?>
</body>
</html>
