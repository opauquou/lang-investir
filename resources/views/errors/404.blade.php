<!DOCTYPE html>
<html>
<head>
    <title>404 | Not Found.</title>

    <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            color: #B0BEC5;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .content a{
            margin: auto;
            display: block;
            width: 64px;
            background-color: #1d68a7;
            color: #fff;
            padding: 15px;
            border-radius: 4px;
            text-decoration: none;
        }

        .title {
            font-size: 72px;
            margin-bottom: 40px;
        }

        .text-center{
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content text-center">
        <div class="title">Not found.</div>
        <a href="{{ url('/') }}" style="">
            Home
        </a>
    </div>
</div>
</body>
</html>
