<?php
//on form send
session_start();

if (isset($_GET['txtUsr']) && isset($_GET['txtPwd'])) {

    $username = $_GET['txtUsr'];
    $password = $_GET['txtPwd'];

    if (empty($username)){
        header("Location: index.php?error=Please provide username");
    }
    elseif (empty($password)){
        header("Location: index.php?error=Please provide password");
    }
    else {
        //on login attempt check database
        //this is probably the dumbest way to do this
        $statement = "SELECT * FROM logindata WHERE username='$username' AND password='$password'";
        $mysql = new mysqli("localhost", "root", "", "test");
        $answerset = $mysql->query($statement);

        if (mysqli_num_rows($answerset) === 1) {
            $userinfo = mysqli_fetch_assoc($answerset);
            if ($userinfo['username'] === $username && $userinfo['password'] === $password) {
                $_SESSION['username'] = $userinfo['username'];
                header("Location: secret.php");
            }else{
                header("Location: index.php?error=Please provide valid details");
            }
        }else{
            header("Location: index.php?error=Please provide valid details");
        }
    }
}
else {
    header("Location: index.php");
}
exit();