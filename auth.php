<?php 
    session_start();
    if(!isset($_SESSION['name'])){
        setcookie(session_name(),"",time()-1);
        header("Location: form.html");
    }
?>