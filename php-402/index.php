<?php
    $xml = simplexml_load_file('students.xml');
    $data = $xml->record;
//    print_r($data);

    for ($i = 0; $i < count($data); $i++) {

        echo 'Student ID:' . $data[$i]->id . '<br/>';
        echo 'Name: ' . $data[$i]->name . '<br/>';
        echo 'Gender: ' . $data[$i]->gender . '<br/>';
        echo 'Section: ' . $data[$i]->section . '<br/><br/>';
    }
    
?>