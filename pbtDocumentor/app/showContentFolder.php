<?php

function showContentFolder($folder) {
    $files1 = scandir($folder);
    echo "<ul>";
    foreach ($files1 as &$value) {
        if($value!="." && $value!="..") {
            $value2 = $folder.'/'.$value;
            if (is_dir($value2) ) {
                echo "<li class='folder'>$value</li>";
                showContentFolder($value2);
            } else {
                echo "<li>$value</li>";
            }
        }
    }
    echo "</ul>";
}

?>
