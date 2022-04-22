<?php
    setcookie("isLogged", "0");
    $username = 'CookieAdmin';
    $password = 'CookiePass';

    if (isset($_POST['login'])) {
        if (isset($_POST['username'], $_POST['password'])) { 
            if ($_POST["username"] == $username && $_POST["password"] == $password) {
                setcookie("isLogged", "1");
                setcookie("username", $username);
                header('Location: '.$_SERVER['PHP_SELF']);
                die;
            } else {
                echo "<h3>Invalid credentials</h3>";
            }
        }
    } else if(isset($_POST['logout'])) {
        setcookie("isLogged", "0");
        setcookie("username", "", time() - 360,'/');
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
    <title>PHP 206 - Login</title>
</head>
<body>
    <h3>Cookie Login</h3>
    <?php if(isset($_COOKIE["username"])) :?>
        Hello <?php echo $_COOKIE["username"] ?>
    <?php endif; ?>
    <form action="index.php" method="post">
        Username: <input type="text" name="username" id=""> <br/>
        Password <input type="password" name="password" id=""> <br/>
        <input type="submit" value="Login" name="login">
        <?php if($_COOKIE["isLogged"] == 1) :?>
            <input type="submit" value="Logout" name="logout">
        <?php endif; ?>
    </form>
</body>


</html>