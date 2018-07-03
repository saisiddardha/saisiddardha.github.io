<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
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
            max-height: 100%;
            max-width:100%;
            min-height:100%;
            position:relative;
        }

        #body {
            padding:10px;
            padding-bottom:60px;   /* Height of the footer */
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
            color: #010108;
            margin-top:0.5vw;
        }
        div.div
        {

            height: auto;
            width: 26vw;
            background-color: rgba(223, 227, 219, 0.51);
            margin-left: 37vw;
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
            margin-left: 4.6vw;
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
        .submit
        {
            margin-left: 9vw;
            margin-top: 0.2vw;
            background-color: rgb(10, 10, 9);
            border-radius: 0.4vw;
            width: 8vw;
            height: 2vw;
            color: white;
            border-color:floralwhite;
            margin-bottom: 0.8vw;
        }
        .submit:hover{
            box-shadow: 0 0.4vw 0.6vw 0 rgba(0,0,0,0.24), 0 0.4vw 2vw 0 rgba(0,0,0,0.19);
        }
        #error,#error3{
            font-size:small;
            font-style:italic;
            font-weight: bolder;
            margin-left: 4vw;
            color: #ff0000;

        }
        #dd{
            text-transform:uppercase;

        }
        :-moz-placeholder {
            display: block;
        }
    </style>
    <script>
        var reg1 = "^[1-2]{1}[0-9]{1}(ss|SS)1(a|A)[0-9]{4}$";
        var reg4 = "^(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}$";
        var fls1;
        function validateid(ari) {


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
            function validatepass(ari) {


                if(!ari.match(reg4)){
                    document.getElementById('error3').innerHTML = "password should contain atleast one uppercase,lowercase,numeric and minimum 8 characters and max 15 characters";
                    fls1 = false;
                    return false;
                }
                else {
                    document.getElementById('error3').innerHTML = "";
                    fls1 = true;
                    return true;
                }

            }
            function formvalidate() {

                if(fls1)
                {
                    return true;
                }
                else {

                    return false;
                }
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
            <div class="doc"><h2 align="center" id ="ttt" >Student Login</h2></div>
            <form name =" form" method="post"   onclick="return formvalidate()" action="checklogin.php">
                <input  class="ccc" placeholder="Enter id number" id ="dd" type="text" name="id" maxlength="10" oninput="return validateid(this.value)" required><p id="error"></p>
                <input class="ccc" placeholder="Password"  type="password" name ="password" maxlength="15" oninput="return validatepass(this.value)" required><p id="error3"></p>
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