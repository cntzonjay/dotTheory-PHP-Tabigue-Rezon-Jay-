
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP - 205</title>
</head>
<body>
    <form action="index.php" method="post">
        First name: <input type="text" name="firstname" id=""/> <br/>
        Last name : <input type="text" name="lastname" id=""> <br/>
        Age : <input type="number" name="age" id=""> <br/>
        <input type="submit" value="Submit"/>

    </form>
    <br/>

</body>

<?php
    if (isset($_POST['firstname'], $_POST['lastname'], $_POST['age'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $age = $_POST['age'];
        echo strtoupper($firstname)." ".strtoupper($lastname)." ".$age."<br/>";
        if ($age >= 1 && $age <= 19) {
            echo "This person is a STUDENT";
        } else if ($age >= 20 && $age <= 25) {
            echo "This person is a EMPLOYEE";
        } else if($age >= 26 && $age <= 30) {
            echo "Have a FAMILY";
        } else {
            echo "This person is AGELESS";
        }
    }
?>

</html>

