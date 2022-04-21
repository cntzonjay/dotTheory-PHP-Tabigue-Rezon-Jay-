<?php
    $age = 21;
    $living_country = "";
    $vacation_country = "";

    if ($age >= 15 && $age <= 18) {
        $living_country = "Singapore";
    } else if ($age == 19) {
        $living_country = "United Kingdom";
    } else if ($age >= 20 && $age <= 23) {
        $living_country = "Canada";
    }

    switch($living_country) {
        case "Singapore" :
            $vacation_country = "France";
        case "United Kingdom":
            $vacation_country = "USA";
        case "Canada":
            $vacation_country = "Philippines";
    }

    echo "Country: ".$living_country."<br/>";
    echo "Vacation: ".$vacation_country;

?>