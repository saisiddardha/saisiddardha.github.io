


<html>
<head>
    <title> dsdfd</title>

    <style>
        .topnav {
            background-color: #323232;
            width:100%;
            height: 4vw;
            -webkit-align-content: center;
            align-content: center;
            position: fixed; /* Set the navbar to fixed position */
        }

        .top a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .top a:hover {
            background-color: #ddd;
            color: black;
        }
        .sidenav {
            height: 100%; /* 100% Full-height */
            width: 0; /* 0 width - change this with JavaScript */
            position: fixed; /* Stay in place */
            z-index: 1; /* Stay on top */
            top: 0; /* Stay at the top */
            left: 0;
            background-color: #111; /* Black*/
            overflow-x: hidden; /* Disable horizontal scroll */

            padding-top: 60px; /* Place content 60px from the top */
            transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
        }
        .sidenav a {
            padding: 8px 8px 8px 8px;
            text-decoration: none;
            font-size: 25px;
            color: #b5b5bb;

            margin-left: 2vw;
            display: block;
            transition: 0.3s;
        }

        /* When you mouse over the navigation links, change their color */
        .sidenav a:hover {
            background-color: rgba(255, 255, 255, 0);
            color: rgb(245, 255, 249);
        }

        /* Position and style the close button (top right corner) */
        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        .span{
            font-size:30px;
            cursor:pointer ;
            float: left ;
            margin-left: 0.7vw;
            margin-top : 0.3vw;

            color : white
        }

        .dropbtn {
                margin-top: 1vw;

        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            border: 0.2vw black;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 14px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {background-color: #ddd;}

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {display: block;}

        /* Change the background color of the dropdown button when the dropdown content is shown */

        .idd{
            color: #dddddd;
            margin-left: 2.5vw;
        }





        /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
        </style>
        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "16vw";

            }

            /* Set the width of the side navigation to 0 and the left margin of the \ page content to 0 */
            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";

            }
        </script>
</head>
<body>
    <div class="topnav">
        <div class="sidenav" id="mySidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&leftarrow;</a>


            <img  src="avatar.png" style="margin-left: 4vw" height="100" width="100" >


            <p class="idd">ID : <?php echo  $_SESSION['id'];  ?></p>



        </div>
        <span class="span"  onclick=openNav()>&#9776;</span>
        <div class="top">
            <a href="accounthome.php">HOME</a>
            <a href="" style="margin-left: 76vw">ABOUT</a>
        </div>
        <div class="dropdown" style="margin-left: 93vw; margin-top: -3vw;">
            <img class="dropbtn" src="avatar.png" height="40" width="40" >
            <div class="dropdown-content">
                <a href="profile.php">profile</a>
                <a href="logout.php">LogOut</a>
            </div>
        </div>



    </div>


</body>
</html>