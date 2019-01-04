<?php
    require_once('app/showContentFolder.php');
    require_once('app/unloadFolder.php');
    require_once('app/apiParser.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>PBT Documentor</title>
    <link rel="stylesheet" href="app/style.css" />
</head>
<body>
    <h1>Liste des fichiers à traiter</h1>
    <p class="back">
        <a href="./">Retour</a>
    </p>
    <?php
        // Set enough time to execute the whole script
        set_time_limit(180);
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
        unlink('framework/elementlist.js');
        unlink('framework/resources/combined.js');
        // Display results
        showContentFolder('framework');
    ?>
</body>
</html>
