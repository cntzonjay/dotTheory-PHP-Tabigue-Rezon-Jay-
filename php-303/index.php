<?php
    class Country {
        public $name;
        public $description;
        public $stat_year; // start year of colonization
        public $end_year; // end year of colonization

        public function __construct($name, $description, $stat_year, $end_year) {
            $this->name = $name;
            $this->description = $description;
            $this->stat_year = $stat_year;
            $this->end_year = $end_year;
        }

        public function get_total_years() {
           return $this->end_year - $this->stat_year;
        }
    }

    $spain = new Country("Spain", "In Spanish culture, people live life to the fullest. But, not in a hurried way. Instead, Spaniards tend to take their time, deliberately, to appreciate the world and people around them. In Spain, people savor long, multi-course meals and wander vivacious villages and charming cities.", 1521, 1898);
    $america = new Country("America", "The period of American colonialization of the Philippines was 48 years. It began with the cession of the Philippines to the U.S. by Spain in 1898 and lasted until the U.S. recognition of Philippine independence in 1946.", 1898, 1946);
    $japan = new Country("Japan", "The Japanese occupation of the Philippines occurred between 1942 and 1945, when Imperial Japan occupied the Commonwealth of the Philippines during World War II. The invasion of the Philippines started on 8 December 1941, ten hours after the attack on Pearl Harbor.", 1942, 1945);
    
    echo "Name: ". $spain->name . "<br/>";
    echo "Description: ". $spain->description . "<br/>";
    echo "Start: ". $spain->stat_year . "<br/>";
    echo "End: ". $spain->end_year . "<br/>";
    echo "Total Colonization years: ". $spain->get_total_years() . "<br/>";

    echo "<br/><br/>";

    echo "Name: ". $america->name . "<br/>";
    echo "Description: ". $america->description . "<br/>";
    echo "Start: ". $america->stat_year . "<br/>";
    echo "End: ". $america->end_year . "<br/>";
    echo "Total Colonization years: ". $america->get_total_years() . "<br/>";

    echo "<br/><br/>";

    echo "Name: ". $japan->name . "<br/>";
    echo "Description: ". $japan->description . "<br/>";
    echo "Start: ". $japan->stat_year . "<br/>";
    echo "End: ". $japan->end_year . "<br/>";
    echo "Total Colonization years: ". $japan->get_total_years() . "<br/>";
    
?>