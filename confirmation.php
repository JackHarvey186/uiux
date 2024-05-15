<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="msapplication-TileColor" content="#00a300">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="...">
    <meta name="robots" content="index">
    <meta name="robots" content="follow">
    <style>
        
        @media screen and (max-width: 600px) { 
            .footerimg2 { display: none; }  
        }
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #333;
        }

        .btn {
            font-family: Arial Black;
            width: 200px;
            height: 250px;
            text-decoration: underline;
            color: white;
            border-radius: 12px;
            padding: 10px 18px;
            white-space: nowrap;
            display: inline-block;
            vertical-align: middle;
            text-align: center;
            background-origin: padding-box;
            position: relative;
            border: solid #3A3B3C;
            margin: 7px;
            cursor: pointer;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            li b {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                user-select: none;
                -moz-user-select: none;
                -khtml-user-select: none;
                -webkit-user-select: none;
                -o-user-select: none;
            }

        p b {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            user-select: none;
            -moz-user-select: none;
            -khtml-user-select: none;
            -webkit-user-select: none;
            -o-user-select: none;
        }

        a.contact{
            color: white;
        }

        li a:hover {
            background-color: #055c00;
        }

        p c {
            display: block;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            color: white;
            text-align: right;
            margin-right: 30px;
        }

        .navbar {
            overflow: hidden;
            background-color: #d7f777;
            height: 75px;
            width: 100vw;
            left: 0;
        }

            .navbar a img {
                background-color: #d7f777;
                font-size: 16px;
                color: white;
                text-align: center;
                padding: 25px 16px;
                border:0;
                text-decoration: none;
                justify-content: right;
            }

            .navbar a2 {
                float: right;
                font-size: 16px;
                color: white;
                text-align: right;
                padding: 28px 16px;
                text-decoration: none;
            }

            .navbar a.clickables{
                float: right;
                font-size: 16px;
                color: black;
                text-align: right;
                padding: 28px 16px;
            }

            .navbar a:hover,
            .dropdown:hover .dropbtn {
                background-color: #1d4cf2;
                color: white;
                height: auto;
                width: auto;
            }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100vw;
            background-color:#003264;
            color: white;
            text-align: center;
        }
        .footer i {
            width:75vw;
            display: inline-block;
        }

        .footerimg {
            position: fixed;
            left: 0;
            bottom: 0;
            background-color: transparent;
            color: white;
            text-align: left;
        }

        .footerimg2 {
            position: fixed;
            right: 0;
            bottom: 0;
            background-color: transparent;
            color: white;
            padding: 10px 10px;
            text-align: right;
        }

        h1, h2, h3, h4, h5, h6, p {
           color:white; 
        }

        body{
            margin: 0;
            padding: 0;
            border: 0;
        }

        .logo{
            margin: 0;
            padding: 0;
            border: 0;
        }

        hr {
            display: block;
            height: 0px;
            border: 0;
            border: 2px solid #ffffff;
            margin: 0;
        }

    </style>
    <script src="https://cdn.jsdelivr.net/npm/jquery"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.terminal/js/jquery.terminal.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery.terminal/css/jquery.terminal.css"/>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <div class="navbar" id="navbarid">
        <a class="img" href="/">
            <img alt="PSSST" src="Pssst24.png" width="100" height="25">
        </a>
        <a class="clickables" href="C:/Users/jackh/source/repos/uiux/appointments.html">Appointments</a>
    </div>
    <title>UI/UX Interface - PSSST - Confirmation</title>
  </head>
<body>
    <div style="margin-left:5%;padding:1px;height:100px;">
        <h1>Appointment Booked</h1>
        <h2>Your Appointment details are below:</h2>
        <?php $supervisors=$_GET["supervisors"];
        echo "Supervisor $supervisors";   
        ?>
    <footer>
        <div class="footer" id="footer">
          <p>A <a class="contact" href="/">BOLD</a> Website</p>
          <img class="footerimg2" alt="JMH LOGO" src="BOLDw.png" width="75" height="25">
        </div>
      </footer>
</body>