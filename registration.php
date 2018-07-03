<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <style>
        html,
        body {
            margin:0;
            padding:0;
            height:100%;
        }
        #container {
            background: url("iiii.jpeg") no-repeat center fixed;
            background-size: 100%;

            max-width:100%;
            min-height:100%;
            position:relative;
        }

        #body {
            padding:10px;
            padding-bottom:60px;
            height:auto;
            /* Height of the footer */
        }
        .image{
            margin-left: 46.5vw;
            margin-top: 3.5vw;

        }
        #ett{
            width: 7vw;
            height: 6vw;
        }
        .clg{
            margin-left: 29.5vw;
            font-family:"Standard Symbols L";
            font-size: 1.6vw;
            font-weight: bolder;
            margin-top:0.5vw;
        }
        div.div
        {

            height: auto;
            width: 30vw;
            background-color: rgba(223, 227, 219, 0.51);
            margin-left: 35vw;
            margin-top: 1.5vw;
            margin-bottom: 1vw;
            border-radius: 0.5vw;
            padding: 0.3vw;
            font-size: large;
            text-align: left;
            box-shadow: 0 0.3vw 0.4vw 0 rgba(0,0,0,0.24), 0 0.4vw 2vw 0 rgba(0,0,0,0.19);
        }
        div.doc{
            font-size: 1.3vw;
            font-family: "Fira Code Retina";
            elevation: above;
            text-shadow: 0.3vw 0.3vw darkgray;
        }
        .ccc
        {
            margin-left: 6vw;
            border:0.2vw solid black;
            border-radius: 0.3vw;
            box-shadow: 0 0.4vw 0.6vw 0 rgba(0,0,0,0.24), 0 0.4vw 2vw 0 rgba(0,0,0,0.19);
            width: 17vw;
            height: 1.5vw;
            background-color: rgba(143, 152, 143, 0.39);
            color : black;
        }
        .ccc:focus, textarea:focus {
            box-shadow: 0 0.5vw 0.5vw 0 rgb(108, 210, 238),0 0.3vw 0.5vw 0 rgb(108, 210, 238);
            border: 0.2vw solid rgb(78, 166, 238);
        }
        #dd{
            text-transform:uppercase;

        }
        .bran{
            margin-left: 6vw;
            margin-top: 0.08vw;
            margin-bottom: -0.3vw;
            box-shadow: 0 0.4vw 0.6vw 0 rgba(0,0,0,0.24), 0 0.4vw 2vw 0 rgba(0,0,0,0.19);
            width: 17.5vw;
            height: 2vw;
            background-color:rgba(143, 152, 143, 0.39);
            border:0.2vw solid black;
            align-content: center;
            border-radius: 0.4vw;
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
            background: url("arrow2.png") no-repeat ;
            background-size: 1vw;
            background-position: 16vw;

        }
        .col{

            color: #212121;
            background-color: rgba(6, 6, 6, 0.46);
            border-radius: 0.7vw;
            border-color: black;
        }
        .submit
        {
            margin-left: 10vw;
            margin-top: 0.2vw;
            background-color: rgb(10, 10, 9);
            border-radius: 0.4vw;
            width: 8vw;
            height: 2vw;
            color: white;
            border-color:white;
            margin-bottom: 0.8vw;
        }
        .submit:hover{
            box-shadow: 0 0.4vw 0.6vw 0 rgba(0,0,0,0.24), 0 0.4vw 2vw 0 rgba(0,0,0,0.19);
        }
        #error,#error1,#error2,#error3,#error4{
            font-size:small;
            font-style:italic;
            font-weight: bolder;
            margin-left: 6vw;
            color: #ff0000;

        }
    </style>
    <script>
        var fls1;
        function validateid(ari) {

            var reg1 = "^[1-2]{1}[0-9]{1}(ss|SS)1(a|A)[0-9]{4}$";
            if (!ari.match(reg1)) {
                document.getElementById('error').innerHTML = "id format should be ex:15SS1A0557";
                fls1 = false;
                return false;
            }
            else {
                document.getElementById('error').innerHTML = "";
                fls1 = true;
                return true;
            }

        }
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
        function validatepass(ari) {

            var reg4 = "^(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}$";
            if(!ari.match(reg4)){
                document.getElementById('error4').innerHTML = "password should contain atleast one uppercase,lowercase,numeric and minimum 8 characters";
                fls1 = false;
                return false;
            }
            else {
                document.getElementById('error4').innerHTML = "";
                fls1 = true;
                return true;
            }

        }
        function confirmpass(ari){
            var pass = document.form.password.value;

            if(pass !== ari)
            {
                document.getElementById('error5').innerHTML = "have to match the password";
                fls1 = false;
                return false;
            }
            else {
                document.getElementById('error5').innerHTML = "";
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
<div id="container">
    <div id="header">
        <?php include("header.php") ?>
    </div>
    <div id="body">
        <div class = 'image' > <img src="Layer 0.png" id="ett"></div>
        <div class="clg"> JNTUH COLLEGE OF ENGINEERING SULTANPUR</div>
        <div class="div">
            <div class="doc"><h2 align="center" id ="ttt" >Student Registration</h2></div>
            <form name="form" method="post" onclick="return validateform()" action="registrationcheck.php" >

                <input  class="ccc" placeholder="Enter id number" type="text" id ="dd" name="id"   maxlength="10"  oninput="validateid(this.value)" required><p id="error"></p>

                <input class="ccc" placeholder="Name" type="text" name="name" oninput="validatenm(this.value)" required ><p id= "error1"></p>

                <input class="ccc" placeholder="Email" type="email" name="email" oninput="validatemail(this.value)" required><p id= "error2" ></p>

                <select name = "branch" class="bran"  required>
                    <option value="">Branch</option>
                    <option value = "CSE" class="col">CSE</option>
                    <option value = "ECE" class="col">ECE</option>
                    <option value = "CIVIL" class="col">CIVIL</option>
                    <option value = "MECH" class="col">MECH</option>
                </select><br>
                <br>
                <select name = "year" class="bran"  required>
                    <option >Year</option>
                    <option value = "1" class="col">1</option>
                    <option value = "2" class="col">2</option>
                    <option value = "3" class="col">3</option>
                    <option value = "4" class="col">4</option>
                </select><br><br>
                <input class ="ccc" placeholder="mobile" type="tel" name ="mobile" maxlength="10" oninput="validateph(this.value)" required><p id="error3"></p>
                <input class="ccc" placeholder="Set a Password" type="password" name ="password" oninput="validatepass(this.value)" required><p id="error4"></p>
                <input class = "ccc" placeholder="confirm password" type="password" name="confrm" oninput ="confirmpass(this.value)" required><p id="error5"></p>
                <input type="submit"  class="submit" value="submit">
            </form>
        </div>
    </div>
    <div id="footer">
        <?php include("footer.php") ?>
    </div>
</div>
</body>
</html>
