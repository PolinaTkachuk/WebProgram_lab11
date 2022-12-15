<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title> home - Backend1</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css">
</head>

<body>
<header>
    <div class="header">Backend1</div>
    <a href="/home" class="Home">Home</a>
</header>

<div class="content">
    <h2> Calc Service Demonstration </h2>
    <ul class="menu">
        <li><a href="/passUsingModel">Using Model Calc</a></li>
        <li><a href="/viewData">Using ViewData(and ViewBag) Calc</a></li>
        <li><a href="/viewComposer">Using View Composer (analogue AccessServiceDirectly)</a></li>
    </ul>

</div>
<footer>© 2022 - Backend1</footer>
</body>
</html>

<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        margin-left: 7%;
    }
    header{
        padding-top: 3%;
        padding-bottom: 3%;
        background-color: black;
        color:gray;
        font-size: 20px;
        font-weight: bold;
        margin:-10px -10px -10px -8%;
        text-align: left;

    }
    .header{
        font-size: 30px;
        padding-left:7%;
        display: inline-block;

    }
    .Home{
        padding-left:45px;
        color:gray;
        text-decoration:none;
    }
    h2{
        font-size: 48px;
    }
    .menu li{
        padding: 9px;
    }
    .menu a{
        text-decoration: none;
        color: #3473b6;
        font-size: 20px;
    }
    footer {
        border-top: solid 1px gainsboro;
        padding-top: 35px;
        margin-top: 30px;
        font-size: 16px;
    }

</style>



