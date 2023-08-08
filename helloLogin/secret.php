<?php
session_start();
//check login status
if (isset($_SESSION['username'])) {
?>
    <html lang="en_US">
    <head>
        <title>Secret</title>
    </head>
    <body>
        <p>Hi there <?php echo $_SESSION['username']; ?> </p>
        <form action="fncLogout.php">
            <button type="submit">Logout</button>
        </form>
    </body>
    </html>
<?php
}//if not logged in reject
else {
    header("Location: index.php");
    exit();
}
?>