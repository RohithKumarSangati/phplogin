<?php
    include 'conn.php';
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];
    $age = $_POST['age'];

    $check = $collection -> findOne([
        'email' => $email,
    ]);
    if($check){
        header("refresh:2;signup.php");
    }
    else{
        $res = $collection -> insertOne([
            'email' => $email,
            'name' => $name,
            'password' => $password,
            'mobile' => $mobile,
            'age' => $age
        ]);
    
        session_start();
        $_SESSION["email"] = $email;
        $_SESSION["name"] = $name;
        $_SESSION["mobile"] = $mobile;
        $_SESSION['age'] = $age;
    
        header("Location: home.php");
    }
?>