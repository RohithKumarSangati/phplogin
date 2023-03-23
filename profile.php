<?php 
    include 'auth.php';
    session_start();
    // echo "Hello " . $_SESSION["name"] . "<br>";
    echo "Your name : " .$_SESSION['name'] ."<br>";
    echo "Your email : " .$_SESSION['email'] . "<br>";
    echo "<a href='home.php'>Home</a><br>";
    echo "<a href='logout.php'>Logout</a><br>";
?>