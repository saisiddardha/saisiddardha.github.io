
<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jntuhces.com</title>
    <style>
        html,
        body {
            margin:0;
            padding:0;
            height:100%;
        }
        #container {


            background-size: 100%;

            max-width:100%;
            min-height:100%;
            position:relative;
        }
        #nme1,#yy{
            margin-top: -1vw;

        }
        #body {
            padding:10px;
            padding-bottom:60px; /* Height of the footer */
            height: auto;
        }

        #profile{
            margin-top:1vw;
            width:11vw;
            height:12vw;
            margin-left:1.9vw;
        }
        .info{
            width:auto;
            height:auto;
            background-color: #5c5c5c;
            box-shadow: rgb(69, 69, 69);
        }
        .profileimage{
            margin-top:8vw;
            margin-left: 25vw;
            width:17vw;
            height:24vw;
            background-color: white;
            border-radius:1vw;
            box-shadow: 0.1vw 0.1vw 0.5vw 0.5vw black;
        }
        .content{
            align-content: center;
            padding: 0.4vw;
            margin-top:-24vw;
            margin-left:50vw;
            width: 34vw;
            height:24vw;
            background-color:white;
            border-radius:1vw;
            float: inside;
        }
        .picture{
            margin-top:-3vw;
            margin-left: 1vw;
        }
        input[type=file]{
            display: none;
        }
        .custom-file-upload {
            background-color: rgb(8, 8, 8);
            color: #dddddd;
            border: 1px solid #ccc;
            width: 2vw;
            height:1vw;
            border-radius: 0.5vw;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
            align-content: center;
            margin-left: 10vw;
            margin-top: 3vw;
            font-size: 1vw;
        }

        #id{
            margin-left: 2vw;
            margin-top: 3vw;
            font-size: 1.5vw;
        }
        .edit{

            margin-top: 2vw;
            margin-left: 22.8vw;


        }
        #edit{
            height:1vw;
            width:1vw;
            margin-top: -1vw;
        }
        .butt{

            width:5vw;
            height:2vw;
            color:white;
            background-color: #010108;
            border-radius: 0.5vw;
            border:white;
        }
        .butt:hover{
            box-shadow: 0 0.4vw 0.6vw 0 rgba(0,0,0,0.24), 0 0.4vw 2vw 0 rgba(0,0,0,0.19);
        }
        .boxes{
            width : 25vw;
            margin-top:1vw;
            margin-bottom:0vw;
            box-shadow: 0 0.4vw 0.6vw 0 rgba(0,0,0,0.24), 0 0.4vw 2vw 0 rgba(0,0,0,0.19);

            padding: 0.2vw;
            border: 0.2vw solid black;
            border-radius: 0.4vw;
            color: #010108;
            background-color: rgba(181, 181, 187, 0.32);
        }


        .boxes1{
            width : 25vw;
            margin-top:2vw;
            margin-bottom:0vw;
            box-shadow: 0 0.4vw 0.6vw 0 rgba(0,0,0,0.24), 0 0.4vw 2vw 0 rgba(0,0,0,0.19);

            padding: 0.2vw;
            border: 0.2vw solid black;
            border-radius: 0.4vw;
            color: #010108;
            background-color: rgba(181, 181, 187, 0.32);
        }
        .head{
            font-weight: bolder;
            font-size: 2vw    ;
            margin-left: 7vw;
        }
        .bran{
            margin-left: 2.1vw;
            margin-top: 1vw;
            margin-bottom: 0vw;
            box-shadow: 0 0.6vw 0.8vw 0 rgba(0,0,0,0.24), 0 0.6vw 2.5vw 0 rgba(0,0,0,0.19);
            width: 25.7vw;
            height: 2vw;
            background-color: rgba(181, 181, 187, 0.32);
            border:0.2vw solid black;
            align-content: center;
            border-radius: 0.4vw;
            color: #010108;
        }

        .bran::placeholder{
            color: darkgrey;
        }
        .bran:focus{
            box-shadow: 0 0.5vw 0.5vw 0 rgb(108, 210, 238),0 0.3vw 0.5vw 0 rgb(108, 210, 238);
            border: 0.2vw solid rgb(78, 166, 238);
        }
        select{
            webkit-appearance: none;  /*Removes default chrome and safari style*/
            -moz-appearance: none;

            background-size: 1vw;
            background-position: 24.3vw;

        }
        .col{

            color: #212121;
            background-color: rgba(6, 6, 6, 0.46);
            border-radius: 0.7vw;
            border-color: black;
        }

        #submit{
            width:5vw;
            height:2vw;
            margin-top: 2vw;
            margin-left: 22.8vw;
            display: none;
            color:white;
            background-color: #010108;
            border-radius: 0.5vw;
            border:white;

        }
        #submit:hover{
            box-shadow: 0 0.4vw 0.6vw 0 rgba(0,0,0,0.24), 0 0.4vw 2vw 0 rgba(0,0,0,0.19);
        }

        #error1,#error2,#error3{
            font-size:small;
            font-style:italic;
            font-weight: bolder;
            margin-left: 6vw;
            color: #ff0000;

        }
        .kk{
            margin-left: 3vw;
        }
        .kk1{
            margin-left: 2.8vw;
        }
        .kk2{
            margin-left: 1.4vw;
        }
        .kk3{
            margin-left: 3.6vw;
        }
        .kk4{
            margin-left: 2vw;
        }
    </style>
    <script>


            function attr() {

                document.getElementById('mybutton').style.visibility ='hidden'

                document.getElementById('nme').removeAttribute('disabled')
                document.getElementById('nme1').removeAttribute('disabled')
                document.getElementById('nme2').removeAttribute('disabled')

                document.getElementById('nme').style.backgroundColor = 'white'
                document.getElementById('nme1').style.backgroundColor = 'white'
                document.getElementById('nme2').style.backgroundColor = 'white'

                document.getElementById('yy').removeAttribute('disabled')
                document.getElementById('yy').style.backgroundColor = 'white'
                document.getElementById('yy').style.backgroundImage = 'url("arrow2.png")'
                document.getElementById('yy').style.backgroundRepeat= 'no-repeat'
                document.getElementById('yy1').removeAttribute('disabled')
                document.getElementById('yy1').style.backgroundColor = 'white'
                document.getElementById('yy1').style.backgroundImage = 'url("arrow2.png")'
                document.getElementById('yy1').style.backgroundRepeat= 'no-repeat'
                document.getElementById('submit').style.display = 'block'

            }

            var fls1;

            function validatenm(ari) {

                var reg2 = "^[A-Za-z\\s]{1,}[\\.]{0,1}[A-Za-z\\s]{0,}$";
                if (!ari.match(reg2)) {
                    document.getElementById('error1').innerHTML = "name format should be { FIRSTNAME LASTNAME }";
                    fls1 = false;
                    return false;
                }
                else {
                    document.getElementById('error1').innerHTML = "";
                    fls1 = true;
                    return true;
                }


            }

            function validatemail(ari) {
                var reg = "^([a-zA-Z0-9_\\.\\-])+\\@(([a-zA-Z0-9\\-])+\\.)+([a-zA-Z0-9]{2,4})+$";

                if(!ari.match(reg)){
                    document.getElementById('error2').innerHTML = "enter proper email address ";
                    fls1 = false;
                    return false;
                }
                else {

                    document.getElementById('error2').innerHTML = "";
                    fls1 = true;
                    return true;
                }
            }

            function validateph(ari) {

                var reg3 = "^[6-9]{1}[0-9]{9}$";
                if (!ari.match(reg3)) {
                    document.getElementById('error3').innerHTML = " number should be started with 6-9 and exactly 10 digits";
                    fls1 = false;
                    return false;
                }
                else {
                    document.getElementById('error3').innerHTML = "";
                    fls1 = true;
                    return true;
                }

            }

            function validateform(){

                return fls1;
            }
    </script>


</head>
<body>
<?php
    $servername = 'localhost';
    $usename = 'root';
    $pasword = '';
    $conn = new mysqli($servername,$usename,$pasword);
    if($conn->connect_error)
        die("connection failed" . $conn->connect_error);
    else
      echo "";
    $conn->select_db("STUDENT");

    $result = $conn->query("SELECT * FROM studentreg WHERE id = '".$_SESSION['id']."' ");

    $re = mysqli_fetch_array($result);


?>
<div id="container">

    <div id="header">
        <?php include("headerlogin.php") ?>
    </div>

    <div id="body">
        <div class="info">
            <div class="profileimage">
                <?php
                if(isset($re['imagename']))
                { ?>
                    <img src="<?php echo $re['imagecontent'];?>" id="profile">
                <?php }
                else {
                    ?>
                    <img src="avatar.png" id="profile">
                    <?php
                }
                ?>

                <div class="picture">
                    <form action="upload.php" method="post" enctype="multipart/form-data">

                    <label class="custom-file-upload" >edit
                        <input type="file"  name="fileToUpload"  id="fileToUpload" onchange="form.submit()">
                    </label>



                        <input type="hidden" name="redirect" value="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" >

                    </form>

                </div>

                <p id="id">ID :<?php  echo  $_SESSION['id']   ;     ?></p>
            </div>
            <div class="content">
                <div class="head">Student Info</div>

                <form method="post" action="editprofile.php" onsubmit="return validateform()">
                    NAME : <input  disabled="disabled"  class="boxes1 kk" type="text" id="nme" name="name" value="<?php  echo  $re['name'];?>"  oninput="validatenm(this.value)  " ><br><p id="error1"></p>
                   EMAIL : <input   disabled="disabled" class="boxes kk1" type="email"   id="nme1"  name="email" value=" <?php  echo  $re['Email'];?> " oninput="validatemail(this.value)"><br><p id="error2"></p>

                    BRANCH : <select name = "branch" id="yy" class="bran kk2" disabled="disabled" >
                        <option value="<?php  echo $re['branch']; ?>"><?php  echo $re['branch'];     ?> </option>
                        <option value = "CSE" class="col">CSE</option>
                        <option value = "ECE" class="col">ECE</option>
                        <option value = "CIVIL" class="col">CIVIL</option>
                        <option value = "MECH" class="col">MECH</option>
                    </select><br>
                    <br>
                    YEAR : <select name = "year" id="yy1" style="margin-top: -1vw"  class="bran kk3" disabled="disabled"  >
                        <option value="<?php  echo $re['year'],'year'    ?>"><?php  echo $re['year'];     ?></option>
                        <option value = "1" class="col">1</option>
                        <option value = "2" class="col">2</option>
                        <option value = "3" class="col">3</option>
                        <option value = "4" class="col">4</option>
                    </select><br>
                    MOBILE : <input  disabled="disabled" class="boxes kk4" type="text"    id="nme2"  name="mobile" value=" <?php  echo  $re['mobile'];?> " oninput="validateph(this.value)"><br><p id="error3"></p>
                    <input   id="submit" type="submit"  value="save" >
                </form>
                <div class="edit"><button class="butt" id="mybutton" onclick="attr()">Edit</button></div>
            </div>
        </div>
    </div>
    <div id="footer">
        <?php include("footer.php") ?>
    </div>
</div>

</body>
</html>