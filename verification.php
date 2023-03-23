<?php
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $name = explode("@",$email)[0];

    function makesession(){
        global $email;
        session_start();
        $_SESSION["email"] = $GLOBALS['email'];
        $_SESSION["name"] = $GLOBALS['name'];
    }


    if($email == "rohith@gmail.com" && $password == '12345'){
        echo "You are successfully verified....<br>";
        echo "Redirecting to the home page";
        makesession();
        header("refresh:3;url = home.php");
    }
    else{
        // echo '<script>alert("Invalid password")</script>';
        // header("Location: form.html");
        echo "Entered Invalid email or password<br>";
        echo "Please try again";
        header("refresh:2;url=form.html");
    }


?>