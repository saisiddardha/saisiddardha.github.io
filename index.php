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
                align-items: center;

        }
        #ett{
            height:8vw;
            width: 10vw;
            margin-left: 45vw;
            margin-top: 10vw;
        }
    </style>
</head>
<body>
    <div id="container">

        <div id="header">
            <?php include("header.php") ?>
        </div>

        <div id="body">
            <div class = 'image'> <img src="Layer 0.png" id="ett"></div>
        </div>
        <div id="footer">
            <?php include("footer.php") ?>
        </div>
    </div>
</body>
</html>