<?php
    include 'conn.php';
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $name = explode("@",$email)[0];

    function makesession($mobile,$age){
        global $email;
        session_start();
        $_SESSION["email"] = $GLOBALS['email'];
        $_SESSION["name"] = $GLOBALS['name'];
        $_SESSION["mobile"] = $mobile;
        $_SESSION["age"] = $age;
    }
    $user = $collection -> findOne([
        'email' => $email,
    ]);


    if(!$user){
        echo "Not registered..<br>";
        echo "Please register......";
        header("refresh:3;url = home.php");
    }
    else if($email == $user['email'] && $password == $user['password']){
        echo "You are successfully verified....<br>";
        echo "Redirecting to the home page";
        makesession($user['mobile'],$user['age']);
        header("refresh:3;url = home.php");
    }
    else{
        echo "Entered Invalid email or password<br>";
        echo "Please try again";
        header("refresh:2;url=form.php");
    }


?>