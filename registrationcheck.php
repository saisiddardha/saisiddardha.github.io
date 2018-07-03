<html>
    <head>
        <title>
            successful
        </title>
        <style>
            div.div{
                width: 20%;
                height: 100px;
                background-color: antiquewhite;
                padding: 20px;
                margin: 100px 400px 30px 400px;
                border-radius: 20px;

                color:blue;

            }
            div.fiv{
                margin-left: 90px;
                margin-right: 40px;
                margin-bottom: 100px;
                margin-top: 30px;
            }
        </style>
    </head>
</html>
<body>
    <div class="div">
        <div class="fiv">
    <?php
        $idd = ($_POST["id"]);
        $name = ($_POST["name"]);
        $email = ($_POST["email"]);
        $branch =( $_POST["branch"]);
        $year  = ($_POST["year"]);
        $mobile = ($_POST["mobile"]);
        $password = ($_POST["password"]);
        $server = "localhost";
        $user = "root";
        $pass = "";
        $conn = new mysqli($server,$user,$pass);
        if(!$conn)
            echo "connection to database failed";
        $conn->select_db("STUDENT");
        $sql = "INSERT INTO studentreg (id,name,Email,branch,year,mobile,Password) VALUES ('$idd','$name','$email','$branch','$year','".$mobile."','$password')";
        if($conn->query($sql))
        {
        echo "registration successful";
            header("Location: index.php");
        }
        else
            echo "failed";
    ?>
        </div>
    </div>
</body>
