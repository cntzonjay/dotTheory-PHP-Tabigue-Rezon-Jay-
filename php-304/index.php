<?php
    echo "&copy; ".date('Y')." PHP Training - C&T";
    echo "<br/>";

    $today = time();
    $bday = strtotime("2022-09-24");
    $res = $bday - $today;
    echo  "Days before bday: ".round($res / (60 * 60 * 24));
    echo "<br/>";

    $old = strtotime("1933-09-01");
    $new = strtotime("2021-09-01");
    $res = $new - $old;

    echo  "Days between: ".round($res / (60 * 60 * 24));
    
?>