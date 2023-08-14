<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,500&display=swap" rel="stylesheet">
    <style type="text/css">
        .container {
            width: 800px;
            margin: 0 auto;
        }
        .header {
            background-color: #eee;
            min-height: 50px;
            text-align: center;
        }
        .jumbotron {
            font-family: 'Raleway', sans-serif;
            width: 100%;
            padding: 80px 40px;
            box-sizing: border-box;
            text-align: center;
            color: white;
            background-color: #aaa;
            background-image: url(https://images.unsplash.com/photo-1515111293107-b0cd6448f5f6?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e4f56141064dbe63db663bb7a2c73b71&auto=format&fit=crop&w=1350&q=80);
            background-size: cover;
            position: relative;
        }
        .jumbotron {
            position: relative;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: black;
            opacity: 0.1;
        }
        .logo img {
            width: 200px;
        }
        .menu ul {
            padding: 0;
        }
        .menu ul li{
            display: inline-block;
            position: relative;
            z-index: 1;
        }
        .menu ul li:hover ul.submenu {
            display: block;
            z-index: 2;
        }
        .menu ul li a {
            padding: 10px 20px;
            text-decoration: none;
        }
        ul.submenu {
            background-color: #eee;
            border: 1px solid #ccc;
            text-align: left;
            position: absolute;
            top: 20px;
            left: 0;
            display: none;
        }
        ul.submenu li {
            display: block;
        }
        ul.submenu li a {
            display: block;
            padding: 5px 10px;
        }
        .content {
            background-color: #ddd;
            min-height: 500px;
            overflow: auto;
        }
        .thumbnail {
            background-color: white;
            text-align: center;
            padding: 10px;
            width: 225px;
            margin: 10px;
            float: left;
        }
        .thumbnail img {
            width: 100%;
        }
        .footer {
            background-color: #ccc;
            min-height: 50px;
            padding: 20px;
            text-align: center;
        }
    </style>
 </head>
 <body>