<?php
    $str1 = "The quick brown fox";
    $str1arr = explode(" ",$str1);
    echo $str1arr[0];
    echo "<br/>";

    $str2 = "The quick brown fox jumps over the lazy dog";
    $str2arr = explode(" ", $str2);
    echo <<<EOT
        $str2arr[0] $str2arr[1] $str2arr[2] $str2arr[3] $str2arr[4]
    EOT;
    echo "<br/>";

    $str3 = '2,543.12';
    echo str_replace(',', '', $str3);



?>