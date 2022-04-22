<?php
    $filename = "read.txt";

    if (file_exists($filename)) {
        $file = fopen($filename, "a+");
        $content = file_get_contents($filename);
        echo $content;
        
        fwrite($file, "\nPrepare for the new King.");
        fclose($file);

        $file = fopen($filename, "r");
        echo "<br/>";
        echo fgets($file);
        echo "<br/>";
        echo fgets($file);
        
        fclose($file);
        

    } else {
        echo "File not found";
    }
?>