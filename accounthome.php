
<?php
session_start();
?>


<html>
<head>
    <title>home|jntuhces</title>
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

        #body {

            padding-bottom:60px;
            height:auto;
            /* Height of the footer */
        }
    </style>
</head>
<body>
<div id="container">

    <div id="header">
        <?php include("headerlogin.php") ?>
    </div>
    <div id="body">

    </div>
    <div id="footer">
        <?php include("footer.php") ?>
    </div>
</div>
</body>
</html>