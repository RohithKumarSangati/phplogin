<?php 
    include 'auth.php';
    session_start();
    echo "Your name : " .$_SESSION['name'] ."<br>";
    echo "Your email : " .$_SESSION['email'] . "<br>";
    echo "Your Mobile : " .$_SESSION['mobile'] ."<br>";
    echo "Your Age : " .$_SESSION['age'] . "<br>";
    echo "<a href='home.php'>Home</a><br>";
    echo "<a href='logout.php'>Logout</a><br>";
?>