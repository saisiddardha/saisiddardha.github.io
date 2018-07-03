

<?php

session_start();
?>



<html>
<head>
    <title> login verification</title>
    <style>
        div.dist{
            width:15%;
            height :auto;
            margin-top:10%;
            margin-left:40%;
            background-color:rgb(220, 228, 232);
            border-radius: 4px;
            border-color:darkred;
        }
        div.die{
            margin-left:20%;

        }
    </style>
</head>
<body>
<div class="dist">
    <br><br><br>
    <div class="die">
<?php

$_SESSION['id'] = $_POST['id'];
$_SESSION['pswd'] = $_POST['password'];
    $servername = 'localhost';
    $usename = 'root';
    $pasword = '';
    $conn = new mysqli($servername,$usename,$pasword);
    if($conn->connect_error)
        die("connection failed" . $conn->connect_error);
    else
        echo "";
    $conn->select_db("STUDENT");
    $res = $conn->query("SELECT id  FROM studentreg WHERE id = '".$_SESSION['id']."'");
    if(mysqli_num_rows($res))
    {
        $que = "SELECT  Password  FROM  studentreg  WHERE id = '".$_SESSION['id']."'";
        $result =$conn->query($que);
        if(mysqli_num_rows($result)>0)
        {
            echo "login succesful";
            header("Location: accounthome.php");
            exit();
        }
        else
           echo "username and password is not correct";
    }
    else
        echo "user not exists";

?>
    </div>
</div>
</body>
</html>

