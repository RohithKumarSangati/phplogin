<?php 
    include 'auth.php'; 
    session_start();
    echo "Hello ". $_SESSION['name'] . "!<br>";
    echo "Welcome to home page......<br>"
?>
<a href='logout.php'>logout</a>
<br>
<a href='profile.php'>Profile</a>