<?php
function apiParser($folder) {

    $files = scandir($folder);

    foreach($files as $file) {
        if($file!="." && $file!=".." && $file!="resources") { // si file n'est pas un fichier/dossier
            $ext       = pathinfo($file);
            $file_name = $folder.'/'.$file;
            $temp      = 'temp.temp';
            $header    = "<?php require_once('../api_begin.php'); ?>"; // 52
            $footer    = "<?php require_once PATH_TO_ROOT . '/kernel/footer.php'; ?>"; // 53

            if($ext['extension'] == 'php') {

                $read_file = fopen($folder.'/'.$file, 'r'); // On ouvre framework/file en lecture
                $file_length = fread($read_file, filesize($file_name)); // on lit file
                $copy_temp = fopen($temp, 'w'); // On ouvre temp en écriture seule

                fwrite($copy_temp, $header, strlen($header));  //  On écrit le header dans temp
                fwrite($copy_temp, $file_length);  //  On écrit file dans temp
                fwrite($copy_temp, $footer);  //  On écrit le footer dans temp
                fclose($read_file); // on ferme le fichier
                fclose($copy_temp); // on ferme temp
                unlink($file_name); // on supprime framework/file
                copy($temp, $folder .'/'.$temp); // on déplace temp dans framwork
                rename($folder .'/'.$temp, $folder .'/'.$file); // on renomme temp en file
            }
        }
    }
}

?>
