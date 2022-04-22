<?php
    $str1 = 'He was eating cake in the cafe.';
    echo $str1."<br/>";
    if (preg_match('/cake/', $str1) == 1) {
        echo "Word cake was found in the sentence.<br/>";
    } else {
        echo "Word not found.<br/>";
    }
    echo "<br/>";
    $str2 = "Earth revolves around\nthe\tSun";
    echo preg_replace("/[\n\t]/","-", $str2);
    echo "<br/>";

    echo "<br/>";
    $str3 = "My favourite colors are red, green and blue";
    $split = preg_split("/[, ]/", $str3);
    print_r($split);
?>