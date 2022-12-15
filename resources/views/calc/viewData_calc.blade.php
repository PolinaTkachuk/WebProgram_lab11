<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title> viewData - Backend1</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css">
</head>

<body>
<header>
    <div class="header">Backend1</div>
    <a href="/home" class="Home">Home</a>
</header>

<div class="content">
    <h2> PassUsingViewData (and ViewBag) </h2>
    <div class="calc">
        <div>Rand Value First :  {{$first_number}}   </div>
        <div>Rand Value Second:  {{$second_number}}   </div>
        <div>Add : </div>
        <p>{{$first_number}} + {{$second_number}} = {{$first_number+$second_number}} <br /></p>
        <div>Sub : </div>
        <p>{{$first_number}} - {{$second_number}} = {{$first_number-$second_number}} <br /></p>
        <div>Mult: </div>
        <p>{{$first_number}} * {{$second_number}} = {{$first_number*$second_number}}<br /></p>
        <div>Div : </div>
        @if($second_number)
            <p>{{$first_number}} / {{$second_number}} = {{$first_number/$second_number}} <br /></p>

        @else
                <?php echo ('Error: division by zero')?>

        @endif

    </div>
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
    .calc div {
        font-weight: bold;
        font-size: 16px;
        padding: 4px;

    }
    footer {
        border-top: solid 1px gainsboro;
        padding-top: 35px;
        margin-top: 30px;
        font-size: 16px;
    }

</style>



