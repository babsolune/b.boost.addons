<?php

function unloadFolder($folder) {
    $dir = opendir($folder);
    while($file = readdir($dir)) {
        if(!in_array($file, array(".", ".."))){
            if(is_dir("$folder/$file")) {
                unloadFolder("$folder/$file");
            } else {
                unlink("$folder/$file");
            }
        }
    }
    closedir($dir);
}

?>
