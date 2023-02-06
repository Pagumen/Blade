<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titlu')</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        a{
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        a:visited{
            color: black
        }
        #box{
            display: flex;
            width: 250px;
            margin: 20px auto;
            justify-content: space-between;
            background-color: #EEE;
        }
        h1{
            margin-left: 20px;
        }
        main{
            width: 100vw;
        }
        main div{
            width: 80%;
            height: 600px;
            margin: auto;
            position: relative;
        }
        main div img{
            position: absolute;
            width: 100%;
            height: 100%;
            object-position: center;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div id="box">
        <a href="/home">Home</a>
        <br>
        <a href="/about">About</a>
        <br>
        <a href="/contacts">Contacts</a>
    </div>
    @yield('content')
    @yield('main')
</body>
</html>