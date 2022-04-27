<?php
    $str = "<p>In Italy<i>pasta</i> is commonly <br />
    eaten during <b>Lunch and Dinner</b> to have a lighter stomach.<br />
    The only thing that is common for Italians is that <i>coffee</i> is always served 3 or 4 times a day.</p>
    <script>alert(\"Cafe!\");</script>
    ";

    echo strip_tags($str,'<p><i>');
?>