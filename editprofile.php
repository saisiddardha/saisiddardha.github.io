<?php

    session_start();


    $name = ($_POST["name"]);
    $email = ($_POST["email"]);
    $branch =( $_POST["branch"]);
    $year  = ($_POST["year"]);
    $mobile = ($_POST["mobile"]);




    $servername = 'localhost';
    $usename = 'root';
    $pasword = '';
    $conn = new mysqli($servername,$usename,$pasword);
    if($conn->connect_error)
        die("connection failed" . $conn->connect_error);
    else
        echo "";
    $conn->select_db("STUDENT");

    $result = $conn->query( "UPDATE studentreg SET   name='".$name."' ,Email='".$email."',branch='".$branch."',year='".$year."',mobile='".$mobile."' WHERE id = '".$_SESSION['id']."'       ");

    header("Location: profile.php");
