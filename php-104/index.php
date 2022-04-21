<?php
    $shoes = ['Nike', 'Adidas', 'Puma', 'Converse']; //shoes array
    echo "The 3rd brand is: " ;
    print($shoes[2]."<br/>");
    print_r($shoes);
    echo "<br/><br/>";
    
    $players = array("Lebron James" => "Lakers", "Derrick Rose" => "Knicks", "Steph Curry" => "Warriors"); // NBA players array
    print($players["Steph Curry"]."<br/>");
    print_r($players);
    echo "<br/><br/>";

    $food_chains = array(
        "Jollibee" => array(
            "Branches" => 12,
            "Managers" => 15,
            "Employees" => 50
        ),
        "Mcdonald's" => array(
            "Branches" => 18,
            "Managers" => 10,
            "Employees" => 70
        ),
        "KFC" => array(
            "Branches" => 8,
            "Managers" => 9,
            "Employees" => 40
        )
    );
    $least_manager = [];
    $most_employee = [];
    $last_key_manager = "";
    $last_key_employee = "";
    foreach ($food_chains as $key => $chains) {
        if (sizeof($least_manager) == 0 && sizeof($most_employee) == 0) {
            $least_manager = array($key => $chains);
            $most_employee = array($key => $chains);
            $last_key_manager = $key;
            $last_key_employee = $key;
        } else {
            
            if ($least_manager[$last_key_manager]["Managers"] > $chains["Managers"]) {
                $least_manager = array($key => $chains);
                $last_key_manager = $key;
            }
            if ($most_employee[$last_key_employee]["Employees"] < $chains["Employees"]) {
                $most_employee = array($key => $chains);
                $last_key_employee = $key;
            }
        }
        
    }
    echo "The Chain with the least Managers: ".$last_key_manager." = ".$least_manager[$last_key_manager]["Managers"];
    echo "<br/><br/>";
    echo "The Chain with the most Employees: ".$last_key_employee." = ".$most_employee[$last_key_employee]["Employees"];
    echo "<br/>";
    print_r($food_chains);


?>