<?php
    require "src/Calculator.php";
    $result = 0;

    if (isset($_GET['num1']) && isset($_GET['num2'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $calc = new Calculator();

        if (isset($_GET['add'])) {
           $result = $calc->add($num1, $num2);
           
        } else if(isset($_GET['sub'])) {
            $result = $calc->sub($num1, $num2);
        } else if(isset($_GET['mul'])) {
            $result = $calc->mul($num1, $num2);
        } else if(isset($_GET['divide'])) {
            $result = $calc->divide($num1, $num2);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="index.php" method="get">
            Num 1: <input type="number" name="num1" id=""><br/>
            Num 2: <input type="number" name="num2" id=""><br/>
            <?php if($result != 0): ?>
            Result: <?php echo $result ?>
            <?php endif;?>
            <hr>
            <input type="submit" value="+" name="add"/> &nbsp;&nbsp; <input type="submit" value="-" name="sub"/>
            <br>
            <input type="submit" value="x" name="mul"/> &nbsp;&nbsp; <input type="submit" value="-" name="divide"/>
        </form>
</body>
</html>