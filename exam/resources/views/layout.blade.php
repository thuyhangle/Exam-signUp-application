<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Exam System</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

        <!-- CSS And JavaScript -->
        <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Open Sans', sans-serif;
            background-color: #FEF3F4;
            color: #EC5B68;
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
            font-weight: lighter;
        }

        footer {
            margin-bottom: 0;
            margin-top: 10%;
        }

        .title {
            font-size: 90px;
        }

        h1, h2, h3, h4, h5 {
            font-weight: lighter;
        }

        button {
            -webkit-appearance: none;
            background-size: 150%;
            background-color: #E74430;
            color: #FFFFFF;
            font-size: 103%;
            border-image-outset: none;
            border-color: #F4645F;
            font-family: 'Open Sans', sans-serif;
            font-size: 20px;
            padding: 10px;
            margin-top: 5%;
        }

        input {
            margin: 20px;
            padding: 3px;
            font-family: 'Open Sans', sans-serif;
            font-size: 20px;
        }
        </style>
    </head>

    <body>
        <a href = "./"><button> <h1>  Exam sign-up application </h1></button></a>

        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Navbar Contents -->
            </nav>
        </div>

        @yield('content')

        <footer>
                <p>PHP Framework - Assignment 2 - t4leth00</p>
                <p >Copyleft 2016 | Le Thuy Hang | +358466143559 | ThuyHangLe.Le@gmail.com | Finland</p>
        </footer>
    </body>
</html>
