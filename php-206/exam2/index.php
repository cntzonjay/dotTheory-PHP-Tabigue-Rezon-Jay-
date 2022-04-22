<?php
    session_start();
    
    if(isset($_SESSION['page_count']) && isset($_SESSION["isLogged"])) {
        if ($_SESSION["isLogged"] == 1)
            $_SESSION['page_count'] += 1;
    }
    else{
        $_SESSION['page_count'] = 1;
    }

    $username = "SessionAdmin";
    $password = "SessionPass";

    if (isset($_POST['login'])) {
        if (isset($_POST['username'], $_POST['password'])) {
            if ($_POST["username"] == $username && $_POST["password"] == $password) {
                $_SESSION["isLogged"] = 1;
                $_SESSION["username"] = $username;
            } else {
                echo "<h3>Invalid credentials</h3>";
            }
        }
    } else if(isset($_POST['logout'])) {
        $_SESSION["isLogged"] = 0;
        unset($_SESSION["username"]);
        header('Location: '.$_SERVER['PHP_SELF']);
        die;
    } else if(isset($_POST["end_session"])) {
        session_destroy();
        header('Location: '.$_SERVER['PHP_SELF']);
        die;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 206 - exam2 - Login</title>
</head>
<body>
    <h3>Session Login</h3>
    <?php if(isset($_SESSION["username"])) :?>
        Hello <?php echo $_SESSION["username"] ?>
    <?php endif; ?>
    <form action="index.php" method="post">
        Username: <input type="text" name="username" id=""> <br/>
        Password <input type="password" name="password" id=""> <br/>
        <input type="submit" value="Login" name="login">

    <?php if(isset($_SESSION["isLogged"]) && $_SESSION["isLogged"] == 1) :?>
            <input type="submit" value="Logout" name="logout">
            <input type="submit" value="End Session" name="end_session">
            <br/>
            <p>Page visited : <?php echo $_SESSION["page_count"]." ".$_SESSION["isLogged"] ?></p>
    <?php endif; ?>

    </form>
</body>


</html>