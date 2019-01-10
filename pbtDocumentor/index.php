<?php
    require_once('app/showContentFolder.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>PBT Documentor</title>
    <link rel="stylesheet" href="app/style.css" />
    <link rel="stylesheet" href="app/ipbt.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.2.1/font-awesome-animation.css">

</head>
<body>
    <div id="waiting-period"></div>
    <h1>pbtDocumentor</h1>
    <p> Générateur de la doc api de PHPBoost </p>
    <p class="parser">
        <a href="apigen_parser.php" id="mill-launcher">Traiter les fichiers du framework</a>
    </p>
    <h3>Liste des fichiers à traiter</h3>
    <?php showContentFolder('framework-from-pbt'); ?>

</body>
<script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous">
</script>
<!-- <script src="/app/waiting.period.js"></script> -->
<script>
    jQuery('#mill-launcher').on('click', function() {
        jQuery('#waiting-period').addClass('mill-running').append('<i class="fa ipbt fa-pbt faa-passing animated fa-4x"></i>');
    });
</script>
</html>
