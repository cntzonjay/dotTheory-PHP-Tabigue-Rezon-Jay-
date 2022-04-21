<?php
    for ($i=0; $i <10 ; $i++) { 
        if($i == 4) {
            echo "The quick brown fox jumps over a lazy dog but the dog woke up and barked at the fox";
        } else {
            echo "The quick brown fox jumps over a lazy dog";
        }
        echo "<br/>";
    }

    echo "<br/>";
    $c = 0;
    while($c < 10) {
        if ($c == 4) {
            echo "The quick brown fox jumps over a lazy dog but the dog woke up and barked at the fox";
        } else {
            echo "The quick brown fox jumps over a lazy dog";
        }
        echo "<br/>";
        $c++;
    } 
    
    echo "<br/>";
    $c = 0;
    do{
        if ($c == 4) {
            echo "The quick brown fox jumps over a lazy dog but the dog woke up and barked at the fox";
        } else {
            echo "The quick brown fox jumps over a lazy dog";
        }
        echo "<br/>";
        $c++;
    }
    while($c < 10);
?>